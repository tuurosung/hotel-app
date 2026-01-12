// App/Models/RoomCategory.php
class RoomCategory extends Model {
    public function rooms()
    public function pricingRules()
    public function activeRooms() // available rooms only
}

// App/Models/Room.php
class Room extends Model {
    public function category()
    public function reservationRooms()
    public function currentAllocation()
    public function allocationHistory()
}

// App/Models/Reservation.php
class Reservation extends Model {
    public function guest()
    public function reservationRooms()
    public function payments()
    public function cancellation()
    public function totalRevenue()
}

// App/Models/ReservationRoom.php
class ReservationRoom extends Model {
    public function reservation()
    public function room()
    public function roomCategory()
    public function allocations()
    public function currentAllocation()
}

// App/Models/Guest.php
class Guest extends Model {
    public function reservations()
    public function interactions()
    public function preferences()
    public function totalSpent()
    public function visitCount()
}
