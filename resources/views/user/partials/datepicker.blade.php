<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr('.datepicker', {
            dateFormat: "m-d-Y",
            disableMobile: true,
            onClose: function(selectedDates, dateStr, instance) {
                updateTotalPrice();
            }
        });

        const startedAtInput = document.getElementById("started_at");
        const endedAtInput = document.getElementById("ended_at");
        const totalPriceInput = document.getElementById("total_price");

        function updateTotalPrice() {
            const pricePerDay = parseFloat("{{ $orders->price_per_day }}"); 
            const startedAt = new Date(startedAtInput.value);
            const endedAt = new Date(endedAtInput.value);

            if (!isNaN(pricePerDay) && startedAt && endedAt) {
                const daysDifference = Math.ceil((endedAt - startedAt) / (1000 * 60 * 60 * 24));
                const total_price = pricePerDay * (daysDifference + 1);
                totalPriceInput.value = total_price.toFixed(2);
            }
        }

        startedAtInput.addEventListener("change", updateTotalPrice);
        endedAtInput.addEventListener("change", updateTotalPrice);
    });
</script>
