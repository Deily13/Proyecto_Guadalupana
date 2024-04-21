
<div class="row has-many-head {{$column}}">
    <h4>{{ $label }}</h4>
</div>

<hr class="form-border">

<div id="has-many-{{$column}}" class="has-many-body has-many-{{$column}}">

    <div class="has-many-{{$column}}-forms">

        @foreach($forms as $pk => $form)

            <div class="has-many-{{$column}}-form fields-group">

                @foreach($form->fields() as $field)
                    {!! $field->render() !!}
                @endforeach

                @if($options['allowDelete'])
                <div class="form-group form-delete-group">
                    <label class="{{$viewClass['label']}} form-label"></label>
                    <div class="{{$viewClass['field']}}">
                        <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash">&nbsp;</i>{{ trans('admin.remove') }}</div>
                    </div>
                </div>
                @endif
                <hr class="form-border">
            </div>


        @endforeach
    </div>


    <template class="{{$column}}-tpl">
        <div class="has-many-{{$column}}-form fields-group">

            {!! $template !!}

            <div class="form-group form-delete-group">
                <label class="{{$viewClass['label']}} form-label"></label>
                <div class="{{$viewClass['field']}}">
                    <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash"></i>&nbsp;{{ trans('admin.remove') }}</div>
                </div>
            </div>
            <hr class="form-border">

        </div>
    </template>

    @if($options['allowCreate'])
    <div class="has-many-footer form-group">
        <label class="{{$viewClass['label']}} form-label"></label>
        <div class="{{$viewClass['field']}}">
            <div class="add btn btn-success btn-sm"><i class="icon-save"></i>&nbsp;{{ trans('admin.new') }}</div>
        </div>
    </div>
    @endif

</div>