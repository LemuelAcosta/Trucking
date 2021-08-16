<form action="{{ url('/truck') }}" method="post">
@csrf
@include('truck.form')
</form>