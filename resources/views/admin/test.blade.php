{{--@foreach($users as $user)--}}
{{--    {{ dd($user->bookings) }}--}}
{{--@endforeach--}}

{{--@foreach($rooms as $room)--}}
{{--    {{ dd($rooms) }}--}}
{{--    {{ dd($room->bookings) }}--}}
{{--@endforeach--}}

{{--@foreach($apartments as $apartment)--}}
{{--    {{ var_dump($apartment->bookings ) }}--}}
{{--@endforeach--}}


{{--@foreach($bookings as $booking)--}}
{{--    {{ $booking->room->title }}--}}
{{--@endforeach--}}
<?php
$room_id = 63;
//$check_in = '2022-07-11';
//$check_out = '2022-07-13';

?>

{{--{{ var_dump($availiable_rooms) }}--}}

{{ var_dump($rooms_by_city) }}

