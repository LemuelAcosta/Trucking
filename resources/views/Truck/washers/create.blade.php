<form action="{{ route("truck.washers.store", $truck_id) }}" method="post">
@csrf
@include('truck.washers.washerform')
</form>