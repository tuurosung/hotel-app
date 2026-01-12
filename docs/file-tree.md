# Hotel Management System - Project Structure

## 📁 Core Application (`app/`)

### Console Commands
```
app/Console/
├── Commands/
│   ├── Reservations/
│   │   │   │   └── CleanupExpiredReservations.php
│   │   │   ├── Reports/
│   │   │   │   ├── GenerateDailyReport.php
│   │   │   │   ├── GenerateOccupancyReport.php
│   │   │   │   └── GenerateRevenueReport.php
│   │   │   ├── Maintenance/
│   │   │   │   ├── UpdateRoomStatuses.php
│   │   │   │   └── CleanupOldLogs.php
│   │   │   └── NightAudit/
│   │   │       └── RunNightAudit.php
│   │   └── Kernel.php
│   │
│   ├── Contracts/
│   │   ├── Repositories/
│   │   │   ├── RoomRepositoryInterface.php
│   │   │   ├── ReservationRepositoryInterface.php
│   │   │   ├── GuestRepositoryInterface.php
│   │   │   └── PaymentRepositoryInterface.php
│   │   ├── Services/
│   │   │   ├── PaymentGatewayInterface.php
│   │   │   ├── NotificationServiceInterface.php
│   │   │   └── PricingEngineInterface.php
│   │   └── Exporters/
│   │       └── ReportExporterInterface.php
│   │
│   ├── DataTransferObjects/
│   │   ├── Reservation/
│   │   │   ├── ReservationData.php
│   │   │   ├── ReservationRoomData.php
│   │   │   └── GuestData.php
│   │   ├── Payment/
│   │   │   ├── PaymentData.php
│   │   │   └── RefundData.php
│   │   └── Pricing/
│   │       ├── PriceCalculationData.php
│   │       └── PricingRuleData.php
│   │
│   ├── Enums/
│   │   ├── ReservationStatus.php
│   │   ├── RoomStatus.php
│   │   ├── PaymentStatus.php
│   │   ├── PaymentMethod.php
│   │   ├── BookingSource.php
│   │   ├── CancellationReason.php
│   │   ├── AllocationStatus.php
│   │   ├── GuestType.php
│   │   └── SeasonType.php
│   │
│   ├── Events/
│   │   ├── Reservation/
│   │   │   ├── ReservationCreated.php
│   │   │   ├── ReservationConfirmed.php
│   │   │   ├── ReservationCancelled.php
│   │   │   ├── ReservationModified.php
│   │   │   ├── CheckInCompleted.php
│   │   │   └── CheckOutCompleted.php
│   │   ├── Room/
│   │   │   ├── RoomAllocated.php
│   │   │   ├── RoomReallocated.php
│   │   │   ├── RoomBumpedUp.php
│   │   │   └── RoomStatusChanged.php
│   │   ├── Payment/
│   │   │   ├── PaymentProcessed.php
│   │   │   ├── PaymentFailed.php
│   │   │   └── RefundProcessed.php
│   │   └── Guest/
│   │       ├── GuestRegistered.php
│   │       └── GuestProfileUpdated.php
│   │
│   ├── Exceptions/
│   │   ├── Reservation/
│   │   │   ├── ReservationNotFoundException.php
│   │   │   ├── ReservationAlreadyCheckInException.php
│   │   │   ├── InvalidReservationDateException.php
│   │   │   └── RoomNotAvailableException.php
│   │   ├── Payment/
│   │   │   ├── PaymentFailedException.php
│   │   │   ├── InsufficientPaymentException.php
│   │   │   └── RefundNotAllowedException.php
│   │   ├── Room/
│   │   │   ├── RoomNotFoundException.php
│   │   │   ├── RoomNotAvailableException.php
│   │   │   └── InvalidRoomStatusException.php
│   │   └── General/
│   │       └── BusinessRuleException.php
│   │
│   ├── Helpers/
│   │   ├── DateHelper.php
│   │   ├── PriceHelper.php
│   │   ├── ReservationHelper.php
│   │   └── FormatHelper.php
│   │
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── API/
│   │   │   │   ├── V1/
│   │   │   │   │   ├── Auth/
│   │   │   │   │   │   ├── LoginController.php
│   │   │   │   │   │   ├── RegisterController.php
│   │   │   │   │   │   └── PasswordResetController.php
│   │   │   │   │   ├── Rooms/
│   │   │   │   │   │   ├── RoomCategoryController.php
│   │   │   │   │   │   ├── RoomController.php
│   │   │   │   │   │   ├── RoomAvailabilityController.php
│   │   │   │   │   │   └── RoomMaintenanceController.php
│   │   │   │   │   ├── Reservations/
│   │   │   │   │   │   ├── ReservationController.php
│   │   │   │   │   │   ├── ReservationSearchController.php
│   │   │   │   │   │   ├── CheckInController.php
│   │   │   │   │   │   ├── CheckOutController.php
│   │   │   │   │   │   └── CancellationController.php
│   │   │   │   │   ├── Pricing/
│   │   │   │   │   │   ├── PricingRuleController.php
│   │   │   │   │   │   ├── PriceCalculationController.php
│   │   │   │   │   │   └── PricingModifierController.php
│   │   │   │   │   ├── Allocations/
│   │   │   │   │   │   ├── RoomAllocationController.php
│   │   │   │   │   │   ├── ReallocationController.php
│   │   │   │   │   │   └── BumpUpController.php
│   │   │   │   │   ├── Payments/
│   │   │   │   │   │   ├── PaymentController.php
│   │   │   │   │   │   ├── RefundController.php
│   │   │   │   │   │   ├── PaymentVerificationController.php
│   │   │   │   │   │   └── InvoiceController.php
│   │   │   │   │   ├── Guests/
│   │   │   │   │   │   ├── GuestController.php
│   │   │   │   │   │   ├── GuestProfileController.php
│   │   │   │   │   │   ├── GuestPreferenceController.php
│   │   │   │   │   │   ├── GuestHistoryController.php
│   │   │   │   │   │   └── GuestInteractionController.php
│   │   │   │   │   ├── Reports/
│   │   │   │   │   │   ├── OccupancyReportController.php
│   │   │   │   │   │   ├── RevenueReportController.php
│   │   │   │   │   │   ├── BookingReportController.php
│   │   │   │   │   │   └── GuestReportController.php
│   │   │   │   │   ├── Dashboard/
│   │   │   │   │   │   ├── DashboardController.php
│   │   │   │   │   │   └── StatisticsController.php
│   │   │   │   │   └── Settings/
│   │   │   │   │       ├── PropertySettingsController.php
│   │   │   │   │       ├── TaxSettingsController.php
│   │   │   │   │       └── NotificationSettingsController.php
│   │   │   │   └── V2/
│   │   │   │       └── (Future API versions)
│   │   │   │
│   │   │   └── Web/
│   │   │       ├── Admin/
│   │   │       │   ├── DashboardController.php
│   │   │       │   ├── RoomManagementController.php
│   │   │       │   ├── ReservationManagementController.php
│   │   │       │   └── SettingsController.php
│   │   │       ├── FrontDesk/
│   │   │       │   ├── CheckInController.php
│   │   │       │   ├── CheckOutController.php
│   │   │       │   └── GuestRegistrationController.php
│   │   │       └── Booking/
│   │   │           ├── BookingController.php
│   │   │           └── BookingConfirmationController.php
│   │   │
│   │   ├── Middleware/
│   │   │   ├── CheckReservationOwnership.php
│   │   │   ├── ValidateCheckInDate.php
│   │   │   ├── PreventDoubleBooking.php
│   │   │   ├── CheckRoomAvailability.php
│   │   │   ├── EnsurePaymentCompleted.php
│   │   │   ├── LogReservationActivity.php
│   │   │   └── RateLimitBooking.php
│   │   │
│   │   ├── Requests/
│   │   │   ├── Reservation/
│   │   │   │   ├── StoreReservationRequest.php
│   │   │   │   ├── UpdateReservationRequest.php
│   │   │   │   ├── CancelReservationRequest.php
│   │   │   │   ├── CheckInRequest.php
│   │   │   │   └── CheckOutRequest.php
│   │   │   ├── Room/
│   │   │   │   ├── StoreRoomRequest.php
│   │   │   │   ├── UpdateRoomRequest.php
│   │   │   │   └── RoomAvailabilityRequest.php
│   │   │   ├── Payment/
│   │   │   │   ├── ProcessPaymentRequest.php
│   │   │   │   └── RefundRequest.php
│   │   │   ├── Guest/
│   │   │   │   ├── StoreGuestRequest.php
│   │   │   │   └── UpdateGuestRequest.php
│   │   │   └── Pricing/
│   │   │       ├── StorePricingRuleRequest.php
│   │   │       └── PriceCalculationRequest.php
│   │   │
│   │   └── Resources/
│   │       ├── Reservation/
│   │       │   ├── ReservationResource.php
│   │       │   ├── ReservationCollection.php
│   │       │   ├── ReservationDetailResource.php
│   │       │   └── ReservationRoomResource.php
│   │       ├── Room/
│   │       │   ├── RoomResource.php
│   │       │   ├── RoomCategoryResource.php
│   │       │   ├── RoomAvailabilityResource.php
│   │       │   └── RoomDetailResource.php
│   │       ├── Guest/
│   │       │   ├── GuestResource.php
│   │       │   ├── GuestProfileResource.php
│   │       │   └── GuestHistoryResource.php
│   │       ├── Payment/
│   │       │   ├── PaymentResource.php
│   │       │   └── InvoiceResource.php
│   │       └── Report/
│   │           ├── OccupancyReportResource.php
│   │           └── RevenueReportResource.php
│   │
│   ├── Jobs/
│   │   ├── Reservations/
│   │   │   ├── SendReservationConfirmation.php
│   │   │   ├── SendCheckInReminder.php
│   │   │   ├── SendCheckOutReminder.php
│   │   │   ├── ProcessAutoAllocation.php
│   │   │   └── ProcessExpiredReservations.php
│   │   ├── Payments/
│   │   │   ├── ProcessPendingPayments.php
│   │   │   ├── SendPaymentReceipt.php
│   │   │   └── ProcessRefund.php
│   │   ├── Notifications/
│   │   │   ├── SendSMSNotification.php
│   │   │   ├── SendEmailNotification.php
│   │   │   └── SendWhatsAppNotification.php
│   │   ├── Reports/
│   │   │   ├── GenerateOccupancyReport.php
│   │   │   ├── GenerateRevenueReport.php
│   │   │   └── ExportReservationData.php
│   │   └── CRM/
│   │       ├── UpdateLoyaltyPoints.php
│   │       ├── SendMarketingCampaign.php
│   │       └── ProcessGuestFeedback.php
│   │
│   ├── Listeners/
│   │   ├── Reservation/
│   │   │   ├── SendReservationConfirmationEmail.php
│   │   │   ├── UpdateRoomInventory.php
│   │   │   ├── NotifyHousekeeping.php
│   │   │   ├── LogReservationActivity.php
│   │   │   └── UpdateGuestHistory.php
│   │   ├── Payment/
│   │   │   ├── SendPaymentReceipt.php
│   │   │   ├── UpdateReservationBalance.php
│   │   │   └── LogPaymentActivity.php
│   │   └── Guest/
│   │       ├── CalculateLoyaltyPoints.php
│   │       └── UpdateGuestPreferences.php
│   │
│   ├── Mail/
│   │   ├── Reservation/
│   │   │   ├── ReservationConfirmation.php
│   │   │   ├── ReservationModified.php
│   │   │   ├── ReservationCancelled.php
│   │   │   ├── CheckInReminder.php
│   │   │   └── CheckOutReminder.php
│   │   ├── Payment/
│   │   │   ├── PaymentReceipt.php
│   │   │   ├── PaymentFailed.php
│   │   │   └── RefundNotification.php
│   │   └── Guest/
│   │       ├── WelcomeEmail.php
│   │       └── FeedbackRequest.php
│   │
│   ├── Models/
│   │   ├── Room/
│   │   │   ├── RoomCategory.php
│   │   │   ├── Room.php
│   │   │   └── RoomAmenity.php
│   │   ├── Reservation/
│   │   │   ├── Reservation.php
│   │   │   ├── ReservationRoom.php
│   │   │   ├── Cancellation.php
│   │   │   └── RoomAllocation.php
│   │   ├── Pricing/
│   │   │   ├── PricingRule.php
│   │   │   ├── PricingModifier.php
│   │   │   └── SeasonalRate.php
│   │   ├── Payment/
│   │   │   ├── Payment.php
│   │   │   ├── PaymentMethod.php
│   │   │   ├── Invoice.php
│   │   │   └── Refund.php
│   │   ├── Guest/
│   │   │   ├── Guest.php
│   │   │   ├── GuestPreference.php
│   │   │   ├── GuestInteraction.php
│   │   │   └── GuestDocument.php
│   │   ├── CRM/
│   │   │   ├── LoyaltyProgram.php
│   │   │   ├── LoyaltyTransaction.php
│   │   │   └── MarketingCampaign.php
│   │   └── System/
│   │       ├── User.php
│   │       ├── Role.php
│   │       ├── Permission.php
│   │       ├── ActivityLog.php
│   │       └── Setting.php
│   │
│   ├── Notifications/
│   │   ├── Reservation/
│   │   │   ├── ReservationConfirmedNotification.php
│   │   │   ├── CheckInReminderNotification.php
│   │   │   └── ReservationCancelledNotification.php
│   │   ├── Payment/
│   │   │   ├── PaymentSuccessNotification.php
│   │   │   └── PaymentFailedNotification.php
│   │   └── System/
│   │       └── SystemAlertNotification.php
│   │
│   ├── Observers/
│   │   ├── ReservationObserver.php
│   │   ├── RoomObserver.php
│   │   ├── PaymentObserver.php
│   │   └── GuestObserver.php
│   │
│   ├── Policies/
│   │   ├── ReservationPolicy.php
│   │   ├── RoomPolicy.php
│   │   ├── PaymentPolicy.php
│   │   ├── GuestPolicy.php
│   │   └── ReportPolicy.php
│   │
│   ├── Providers/
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   ├── RouteServiceProvider.php
│   │   ├── RepositoryServiceProvider.php
│   │   └── PaymentServiceProvider.php
│   │
│   ├── Repositories/
│   │   ├── Eloquent/
│   │   │   ├── EloquentRoomRepository.php
│   │   │   ├── EloquentReservationRepository.php
│   │   │   ├── EloquentGuestRepository.php
│   │   │   ├── EloquentPaymentRepository.php
│   │   │   └── EloquentPricingRepository.php
│   │   └── Cache/
│   │       ├── CachedRoomRepository.php
│   │       └── CachedPricingRepository.php
│   │
│   ├── Rules/
│   │   ├── ValidCheckInDate.php
│   │   ├── ValidCheckOutDate.php
│   │   ├── RoomAvailable.php
│   │   ├── ValidCreditCard.php
│   │   └── MinimumStayRequirement.php
│   │
│   ├── Services/
│   │   ├── Reservation/
│   │   │   ├── ReservationService.php
│   │   │   ├── AvailabilityService.php
│   │   │   ├── CheckInService.php
│   │   │   ├── CheckOutService.php
│   │   │   └── CancellationService.php
│   │   ├── Room/
│   │   │   ├── RoomService.php
│   │   │   ├── AllocationService.php
│   │   │   ├── ReallocationService.php
│   │   │   └── BumpUpService.php
│   │   ├── Pricing/
│   │   │   ├── PricingService.php
│   │   │   ├── DynamicPricingEngine.php
│   │   │   └── DiscountService.php
│   │   ├── Payment/
│   │   │   ├── PaymentService.php
│   │   │   ├── RefundService.php
│   │   │   ├── Gateways/
│   │   │   │   ├── StripeGateway.php
│   │   │   │   ├── PayPalGateway.php
│   │   │   │   └── PaystackGateway.php
│   │   │   └── InvoiceService.php
│   │   ├── Guest/
│   │   │   ├── GuestService.php
│   │   │   ├── CRMService.php
│   │   │   └── LoyaltyService.php
│   │   ├── Notification/
│   │   │   ├── NotificationService.php
│   │   │   ├── EmailService.php
│   │   │   ├── SMSService.php
│   │   │   └── WhatsAppService.php
│   │   ├── Report/
│   │   │   ├── ReportService.php
│   │   │   ├── OccupancyReportService.php
│   │   │   ├── RevenueReportService.php
│   │   │   └── ExportService.php
│   │   └── Integration/
│   │       ├── ChannelManagerService.php
│   │       ├── OTAIntegrationService.php
│   │       └── PBXIntegrationService.php
│   │
│   └── Traits/
│       ├── HasReservations.php
│       ├── HasPayments.php
│       ├── Searchable.php
│       ├── Filterable.php
│       ├── Sortable.php
│       └── Auditable.php
│
├── bootstrap/
│   ├── app.php
│   └── cache/
│
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── hotel.php                      # Custom hotel settings
│   ├── pricing.php                    # Pricing configuration
│   ├── payments.php                   # Payment gateway config
│   ├── channels.php                   # Channel manager config
│   └── notifications.php              # Notification settings
│
├── database/
│   ├── factories/
│   │   ├── RoomFactory.php
│   │   ├── RoomCategoryFactory.php
│   │   ├── ReservationFactory.php
│   │   ├── GuestFactory.php
│   │   └── PaymentFactory.php
│   │
│   ├── migrations/
│   │   ├── 2024_01_01_000001_create_room_categories_table.php
│   │   ├── 2024_01_01_000002_create_rooms_table.php
│   │   ├── 2024_01_01_000003_create_room_amenities_table.php
│   │   ├── 2024_01_01_000004_create_guests_table.php
│   │   ├── 2024_01_01_000005_create_guest_preferences_table.php
│   │   ├── 2024_01_01_000006_create_guest_interactions_table.php
│   │   ├── 2024_01_01_000007_create_pricing_rules_table.php
│   │   ├── 2024_01_01_000008_create_pricing_modifiers_table.php
│   │   ├── 2024_01_01_000009_create_reservations_table.php
│   │   ├── 2024_01_01_000010_create_reservation_rooms_table.php
│   │   ├── 2024_01_01_000011_create_room_allocations_table.php
│   │   ├── 2024_01_01_000012_create_cancellations_table.php
│   │   ├── 2024_01_01_000013_create_payments_table.php
│   │   ├── 2024_01_01_000014_create_refunds_table.php
│   │   ├── 2024_01_01_000015_create_invoices_table.php
│   │   ├── 2024_01_01_000016_create_loyalty_programs_table.php
│   │   ├── 2024_01_01_000017_create_loyalty_transactions_table.php
│   │   ├── 2024_01_01_000018_create_activity_logs_table.php
│   │   └── 2024_01_01_000019_create_settings_table.php
│   │
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── RoomCategorySeeder.php
│       ├── RoomSeeder.php
│       ├── PricingRuleSeeder.php
│       ├── UserSeeder.php
│       ├── RoleAndPermissionSeeder.php
│       └── SettingSeeder.php
│
├── public/
│   ├── index.php
│   ├── css/
│   ├── js/
│   ├── images/
│   │   ├── rooms/
│   │   ├── categories/
│   │   └── guests/
│   └── uploads/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   ├── app.js
│   │   ├── components/
│   │   │   ├── Reservation/
│   │   │   │   ├── ReservationForm.vue
│   │   │   │   ├── ReservationCalendar.vue
│   │   │   │   └── ReservationList.vue
│   │   │   ├── Room/
│   │   │   │   ├── RoomSelector.vue
│   │   │   │   ├── RoomAvailability.vue
│   │   │   │   └── RoomCard.vue
│   │   │   ├── Payment/
│   │   │   │   ├── PaymentForm.vue
│   │   │   │   └── InvoiceViewer.vue
│   │   │   └── Dashboard/
│   │   │       ├── OccupancyChart.vue
│   │   │       ├── RevenueChart.vue
│   │   │       └── StatisticsCard.vue
│   │   └── pages/
│   │       ├── Dashboard.vue
│   │       ├── Reservations.vue
│   │       ├── Rooms.vue
│   │       └── Guests.vue
│   │
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   ├── admin.blade.php
│   │   │   └── guest.blade.php
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   └── register.blade.php
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── reservations/
│   │   │   ├── rooms/
│   │   │   └── guests/
│   │   ├── booking/
│   │   │   ├── search.blade.php
│   │   │   ├── select-rooms.blade.php
│   │   │   ├── guest-details.blade.php
│   │   │   └── confirmation.blade.php
│   │   ├── emails/
│   │   │   ├── reservation/
│   │   │   │   ├── confirmation.blade.php
│   │   │   │   └── reminder.blade.php
│   │   │   └── payment/
│   │   │       └── receipt.blade.php
│   │   └── pdfs/
│   │       ├── invoice.blade.php
│   │       └── reservation-voucher.blade.php
│   │
│   └── lang/
│       ├── en/
│       │   ├── messages.php
│       │   ├── validation.php
│       │   └── reservations.php
│       └── fr/
│
├── routes/
│   ├── api.php
│   ├── web.php
│   ├── channels.php
│   └── console.php
│
├── storage/
│   ├── app/
│   │   ├── private/
│   │   │   ├── invoices/
│   │   │   ├── contracts/
│   │   │   └── documents/
│   │   ├── public/
│   │   │   ├── room-images/
│   │   │   ├── guest-documents/
│   │   │   └── reports/
│   │   └── exports/
│   │
│   ├── framework/
│   │   ├── cache/
│   │   ├── sessions/
│   │   └── views/
│   │
│   └── logs/
│       ├── laravel.log
│       ├── reservations.log
│       ├── payments.log
│       └── audit.log
│
├── tests/
│   ├── Feature/
│   │   ├── Reservation/
│   │   │   ├── CreateReservationTest.php
│   │   │   ├── CancelReservationTest.php
│   │   │   ├── CheckInTest.php
│   │   │   └── CheckOutTest.php
│   │   ├── Room/
│   │   │   ├── RoomAvailabilityTest.php
│   │   │   ├── RoomAllocationTest.php
│   │   │   └── RoomReallocationTest.php
│   │   ├── Payment/
│   │   │   ├── ProcessPaymentTest.php
│   │   │   └── RefundTest.php
│   │   └── Pricing/
│   │       └── PriceCalculationTest.php
│   │
│   ├── Unit/
│   │   ├── Services/
│   │   │   ├── AvailabilityServiceTest.php
│   │   │   ├── PricingServiceTest.php
│   │   │   └── AllocationServiceTest.php
│   │   ├── Models/
│   │   │   ├── ReservationTest.php
│   │   │   ├── RoomTest.php
│   │   │   └── GuestTest.php
│   │   └── Helpers/
│   │       └── DateHelperTest.php
│   │
│   ├── Integration/
│   │   ├── PaymentGatewayTest.php
│   │   ├── ChannelManagerTest.php
│   │   └── EmailServiceTest.php
│   │
│   └── TestCase.php
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
├── modules/                           # For modular architecture (optional)
│   ├── FrontDesk/
│   ├── Housekeeping/
│   ├── Restaurant/
│   └── Spa/
│
├── docs/                              # Documentation
│   ├── api/
│   │   └── openapi.yaml
│   ├── architecture/
│   ├── deployment/
│   └── user-guides/
│
└── scripts/                           # Deployment & utility scripts
├── deploy.sh
├── backup.sh
└── seed-demo-data.sh


## Key Architecture Decisions

1. **Repository Pattern**: Separates data access logic from business logic
2. **Service Layer**: Handles complex business logic and orchestration
3. **DTOs**: Type-safe data transfer between layers
4. **Enums**: PHP 8.1+ enums for type safety on status fields
5. **Events & Listeners**: Decoupled, async-ready architecture
6. **API Versioning**: Future-proof API structure (V1, V2)
7. **Resource Transformation**: Clean API responses via Resources
8. **Policy-based Authorization**: Granular access control
9. **Job Queues**: Async processing for emails, reports, etc.
10. **Comprehensive Testing**: Unit, Feature, and Integration tests

This structure supports a scalable, maintainable, and testable hotel management system following Laravel best practices and SOLID principles.
