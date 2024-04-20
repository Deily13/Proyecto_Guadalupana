
@extends('admin::grid.inline-edit.comm')

@section('field')
    <input class="form-control ie-input"/>
@endsection

@section('assert')
 <script>

    admin.grid.inline_edit.functions['{{ $trigger }}'] = {
        content : function(trigger,content){
            content.querySelector('input').value = trigger.dataset.value;
        },
        shown : function(trigger,content){
            let field = content.querySelector('input');
            field.focus();
            @if($mask)
            Inputmask(@json($mask)).mask(field);
            @endif

        }
    }

</script>
@endsection


