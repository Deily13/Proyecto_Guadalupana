<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolsa;
use App\Models\Payment;
use App\Models\Product;
use Resend;

class BolsaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('mostrarBolsa');
    }

    public function index()
    {

        return view('/auth/bolsa');
    }

    public function mostrarBolsa()
    {
        $productos = Bolsa::with('product', 'user')
            ->where('pay', false)
            ->where('user_id', auth()->id())
            ->get(); // Obtener todos los productos de la bolsa

        /* total */
        $total = $productos->sum(function ($producto) {
            return $producto->product->precio * $producto->cantidad;
        });

        return view('/auth/bolsa', compact('productos', 'total')); // Pasar los productos a la vista
    }

    public function borrarProducto($id)
    {
        // Buscar el producto en la bolsa
        $bolsa = Bolsa::find($id);

        // Si el producto existe, eliminarlo
        if ($bolsa) {
            $bolsa->delete();
            return back()->with('success', 'Producto eliminado correctamente.');
        } else {
            return back()->with('error', 'El producto no se encontró.');
        }
    }

    public function pagar(Request $request)
    {
        $productos = Bolsa::with('product', 'user')
            ->where('pay', false)
            ->where('user_id', auth()->id())
            ->get();

        foreach ($productos as $producto) {
            $productoEnStock = $producto->product;
            $productoEnStock->Stock -= $producto->cantidad;
            $productoEnStock->save();
        }

        $productos = Bolsa::with('product', 'user')
            ->where('pay', false)
            ->where('user_id', auth()->id())
            ->update(['pay' => true]);


        $user = auth()->user();
        $nombre = strtoupper($user->first_name . ' ' . $user->last_name);
        $mail = $user->email;
        $total = $request->total;

        $payment = new Payment();
        $payment->user_id = auth()->id();
        $payment->total = $total;
        $payment->save();

        $numero_factura = $payment->numero_factura;

        try {
            $this->sendMail($mail, $total, $nombre, $numero_factura);
        } catch (\Throwable $th) {
            // throw $th;
        }

        return redirect()->to('/dashboard');
    }

    private function sendMail($mail, $total, $nombre, $numero_factura)
    {
        $pay = number_format($total, 2, ',', '.');
        $pay = '$' . $pay;

        $resend = Resend::client('re_YtFZtxy9_KMxHiNti7RHpBR8iMLVi77FG');

        $resend->emails->send([
            'from' => 'onboarding@resend.dev',
            'to' => $mail,
            'subject' => 'Pedido Pagado Correctamente',
            'html' => "<p>N° FACTURA: $numero_factura</p>
          <p>$nombre Guadalupana le agradece su compra <strong>Estamos agradecidos por su compra en nuestro restaurante su pago total fue de: $pay </strong>!</p>"
        ]);
    }
}
