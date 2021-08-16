<form action="{{ url('/truck/'.$truck->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('truck.form')
</form>
