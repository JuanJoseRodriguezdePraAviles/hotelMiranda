<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $rooms = json_decode(file_get_contents(database_path('data/Rooms.json')), true);
        

        foreach ($rooms as $room) {
            $amenities = $room['room_amenities'];
            if (is_string($amenities)) {
                $amenities = json_decode($amenities, true);
                if ($amenities === null) {
                    $amenities = [];
                }
            }
            $createRoom = \App\Models\Room::create([
                'roomName' => $room['room_name'] ?? null,
                'roomType' => $room['room_type'],
                'roomFloor' => $room['room_floor'],
                'status' => $room['status'],
                'description' => $room['description'],
                'photos' => isset($room['photos']) && is_array($room['photos']) ? json_encode($room['photos']) : json_encode([]),
                'offer' => $room['offer'],
                'price' => $room['price'],
                'discount' => $room['discount'],
                'cancellationPolicy' => $room['cancellation_policy'],
                'roomAmenities' => is_string($room['room_amenities']) ? json_decode($room['room_amenities'], true) : $room['room_amenities'] ?? [],

            ]);
        }

        $bookings = json_decode(file_get_contents(database_path('data/Bookings.json')), true);

        foreach ($bookings as $booking) {

            \App\Models\Booking::create([
                'roomId' => $booking['room_id'],
                'clientId' => $booking['client_id'],
                'clientName' => $booking['client_name'],
                'clientEmail' => $booking['client_email'],
                'clientPhone' => $booking['client_phone'],
                'orderDate' => Carbon::createFromFormat('d/m/Y', $booking['order_date'])->format('Y-m-d'),
                'checkInDate' => Carbon::createFromFormat('d/m/Y', $booking['check_in_date'])->format('Y-m-d'),
                'checkOutDate' => Carbon::createFromFormat('d/m/Y', $booking['check_out_date'])->format('Y-m-d'),
                'status' => $booking['status'],
                'specialRequest' => $booking['special_request']
            ]);
        }

        $reviews = json_decode(file_get_contents(database_path('data/Reviews.json')), true);

        foreach ($reviews as $review) {
            \App\Models\Review::create([
                'email' => $review['email'],
                'date' => Carbon::createFromFormat('d/m/Y', $review['date'])->format('Y-m-d'),
                'customerName' => $review['customer_name'],
                'phone' => $review['phone'],
                'subject' => $review['subject'],
                'comment' => $review['comment'],
                'archived' => $review['archived']
            ]);
        }

        $employees = json_decode(file_get_contents(database_path('data/Employees.json')), true);

        foreach ($employees as $employee) {
            \App\Models\Employee::create([
                'name' => $employee['name'],
                'email' => $employee['email'],
                'password' => $employee['password'] ?? null,
                'jobFunctions' => $employee['job_functions'],
                'registrationDate' => Carbon::createFromFormat('d/m/Y', $employee['registration_date'])->format('Y-m-d'),
                'phone' => $employee['phone'],
                'schelude' => $employee['schelude'],
                'status' => $employee['status']
            ]);
        }
    }
}
