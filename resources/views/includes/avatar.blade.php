<div>
@if (Auth::user()->image)
    <img src="{{ route('user.avatar', ['fileName' => Auth::user()->image]) }}" alt="Avatar"
        class="border rounded-circle m-2" style="width:50px; height:50px;"/>
@endif


</div>

