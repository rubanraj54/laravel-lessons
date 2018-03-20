<div class="form-group">
    {!!Form::label($name,$labelName)!!}
    {!!Form::text($name,$value,array_merge(['class'=>'form-control'],$attribute))!!}
    @if ($errors->has($name))
        <span style="color:red">{{$errors->first($name)}}</span>
    @endif
</div>
