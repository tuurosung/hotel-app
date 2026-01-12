// Room Categories
- room_categories: id, name, slug, description, base_capacity, max_capacity, amenities (json), images (json), status, created_at, updated_at

// Rooms
- rooms: id, room_category_id, room_number, floor, building, status (available, occupied, maintenance, out_of_service), last_maintenance_date, notes, created_at, updated_at

// Pricing
- pricing_rules: id, room_category_id, name, base_price, season_type (regular, peak, off_peak), start_date, end_date, days_of_week (json), min_nights, max_nights, priority, active, created_at, updated_at

- pricing_modifiers: id, name, type (percentage, fixed), value, applicable_to (category, specific_rooms), conditions (json), start_date, end_date, active, created_at, updated_at

// Reservations & Bookings
- reservations: id, guest_id, reservation_number, check_in_date, check_out_date, total_guests, adults, children, status (pending, confirmed, checked_in, checked_out, cancelled), special_requests, source (website, phone, walk_in, ota), total_amount, paid_amount, balance, created_at, updated_at

- reservation_rooms: id, reservation_id, room_id, room_category_id, check_in_date, check_out_date, base_price, final_price, guests, status (allocated, checked_in, checked_out), created_at, updated_at

// Cancellations
- cancellations: id, reservation_id, cancelled_by (guest, staff, system), cancellation_date, reason, refund_amount, penalty_amount, refund_status (pending, processed, completed), notes, created_at, updated_at

// Room Allocations & Movements
- room_allocations: id, reservation_room_id, room_id, allocated_at, deallocated_at, allocation_type (initial, reallocation, bump_up), reason, allocated_by, created_at, updated_at

// Payments
- payments: id, reservation_id, payment_method (card, cash, bank_transfer, online), transaction_id, amount, currency, status (pending, completed, failed, refunded), payment_date, gateway_response (json), created_at, updated_at

// CRM
- guests: id, first_name, last_name, email, phone, date_of_birth, id_number, address, city, country, preferences (json), vip_status, loyalty_points, notes, created_at, updated_at

- guest_interactions: id, guest_id, staff_id, interaction_type (call, email, complaint, request), subject, description, status, created_at, updated_at

- guest_preferences: id, guest_id, preference_type (room_type, floor, amenities), preference_value, created_at, updated_at
