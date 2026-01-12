// App/Services/AvailabilityService.php
- checkAvailability($categoryId, $checkIn, $checkOut, $rooms)
- getAvailableRooms($categoryId, $checkIn, $checkOut)
- getAvailabilityCalendar($categoryId, $startDate, $endDate)

// App/Services/PricingService.php
- calculatePrice($categoryId, $checkIn, $checkOut, $guests)
- applyModifiers($basePrice, $reservation)
- getDynamicPricing($categoryId, $date)

// App/Services/ReservationService.php
- createReservation($data)
- confirmReservation($reservationId)
- checkIn($reservationId)
- checkOut($reservationId)
- extendStay($reservationId, $newCheckOut)

// App/Services/AllocationService.php
- autoAllocateRooms($reservationId)
- reallocateRoom($reservationRoomId, $newRoomId, $reason)
- bumpUpRoom($reservationRoomId, $targetCategoryId, $reason)
- findBestRoomMatch($reservation, $preferences)

// App/Services/CancellationService.php
- cancelReservation($reservationId, $reason)
- calculateRefund($reservation, $cancellationDate)
- processCancellationPolicy($reservation)

// App/Services/PaymentService.php
- processPayment($reservationId, $amount, $method)
- refundPayment($paymentId, $amount)
- verifyPayment($transactionId)

// App/Services/CRMService.php
- getGuestProfile($guestId)
- trackInteraction($guestId, $type, $data)
- calculateLoyaltyPoints($reservation)
- sendMarketingCampaign($segment)


// App/Repositories/RoomRepository.php
- findAvailableByCategory($categoryId, $startDate, $endDate)
- findRoomForAllocation($criteria)
- getRoomOccupancyReport($startDate, $endDate)

// App/Repositories/ReservationRepository.php
- findUpcomingCheckIns($date)
- findUpcomingCheckOuts($date)
- findPendingAllocations()
- getRevenueReport($startDate, $endDate)


// App/Jobs/
- SendReservationConfirmation (notification)
- ProcessAutoAllocation (runs daily or on-demand)
- SendCheckInReminder (runs daily for next-day check-ins)
- ProcessPendingPayments (runs hourly)
- CleanupExpiredReservations (runs daily)
- GenerateOccupancyReport (runs weekly)
- UpdateLoyaltyPoints (processes after checkout)


// Events
- ReservationCreated -> SendConfirmationEmail, UpdateInventory
- ReservationConfirmed -> AllocateRooms, ChargeDeposit
- RoomAllocated -> NotifyHousekeeping, NotifyGuest
- CheckInCompleted -> UpdateRoomStatus, NotifyServices
- CheckOutCompleted -> ProcessFinalPayment, UpdateLoyaltyPoints
- ReservationCancelled -> ReleaseRooms, ProcessRefund
- RoomReallocated -> NotifyGuest, NotifyStaff

// App/Http/Controllers/API/
- RoomCategoryController (CRUD)
- RoomController (CRUD, availability)
- ReservationController (create, update, cancel, check-in/out)
- PricingController (get prices, manage rules)
- AllocationController (allocate, reallocate, bump-up)
- PaymentController (process, verify, refund)
- GuestController (CRUD, profile, history)
- DashboardController (statistics, reports)

// When booking multiple rooms
$reservation->reservationRooms()->createMany([
    ['room_category_id' => 1, 'guests' => 2],
    ['room_category_id' => 2, 'guests' => 3],
]);


// Priority-based allocation considering:
- Guest preferences & history
- Room availability
- Maintenance schedules
- VIP status
- Special requests

// Bump-up logic when requested category unavailable
if (!$availableRoom) {
    $higherCategory = $this->findUpgradableCategory($requestedCategory);
    $this->bumpUpRoom($reservation, $higherCategory, 'Category unavailable');
}

// Integration points
- Stripe/PayPal gateway integration
- PCI-compliant tokenization
- 3D Secure authentication
- Transaction logging
- Automatic reconciliation

// Middleware
- CheckReservationOwnership
- ValidateCheckInDate
- PreventDoubleBooking
- RateLimiting for booking endpoints

// Policies
- ReservationPolicy (view, update, cancel, checkIn)
- RoomPolicy (allocate, reallocate, maintenance)
- PaymentPolicy (process, refund)
