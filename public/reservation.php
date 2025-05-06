<?php
include("./config.php");
// Check if user is already logged in
if (!isLoggedIn()) {
    header("Location: login.php");
}


if (isset($_GET["check_in_date"])) {
    $check_in_date = $_GET["check_in_date"];
    $check_out_date = $_GET["check_out_date"];
    $no_children = $_GET["children"];
    $no_adults = $_GET["adults"];
}
?>


<?php include("./includes/header.php"); ?>
<body>
    <?php include("./includes/navbar.php"); ?>


    <section id="reservation">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5">
                    <h1>Make your reservation</h1>
                    <p>
                        Our hotel is self-certified to follow a series of
                        precautionary measures to make your hotel stay safe and
                        healthy.
                    </p>
                </div>
                <div class="col-md-7">
                    <form method="POST" action="" id="reservation_details">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check In</span>
                                    <input class="form-control" name="check_in_date" id="check_in_date" type="text" required value="<?php if (isset($check_in_date)) {
                                        echo $check_in_date;
                                    } ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check out</span>
                                    <input class="form-control" name="check_out_date" id="check_out_date" type="text" required value="<?php if (isset($check_out_date)) {
                                        echo $check_out_date;
                                    } ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="form-label">Room</span>
                            <select class="form-control" name="room_id" id="room_id" required>
                                <option value="">Select Room</option>
                                <?php
                                $sql = "SELECT * FROM rooms WHERE room_booked = 0";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($rows as $row) {
                                    ?>
                                    <option value="<?= $row["room_id"]; ?>"><?= $row["room_name"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no_adults">Adults</label>
                                    <input type="number" class="form-control" name="no_adults" id="no_adults" value="<?php if (isset($no_adults)) {
                                        echo $no_adults;
                                    } ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no_children">Children</label>
                                    <input type="number" class="form-control" name="no_children" id="no_children" value="<?php if (isset($no_children)) {
                                        echo $no_children;
                                    } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="btn btn-primary submit-btn" name="confirm_booking">Continue to payment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include("./includes/footer.php"); ?>
    <script>
        $("#check_in_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            numberOfMonths: [1, 2],
            onSelect: function (selectedDate) {
                const minCheckoutDate = new Date(selectedDate);
                minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                $("#check_out_date").datepicker("option", "minDate", minCheckoutDate);
                $("#check_in_date").val(selectedDate); // Ensure the input reflects the selected date
            }
        });


        $("#check_out_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 1,
            numberOfMonths: [1, 2],
            onSelect: function (selectedDate) {
                $("#check_out_date").val(selectedDate); // Ensure the input reflects the selected date
            }
        });


        $(document).ready(function () {
            $("nav").eq(0).addClass("bg-dark");
            $("nav").eq(0).addClass("navbar-dark");


            $("#reservation_details").submit(function (e) {
                e.preventDefault();
                const indate = $("#check_in_date").val();
                const outdate = $("#check_out_date").val();


                if (!indate || !outdate) {
                    alert("Please select both check-in and check-out dates.");
                    return;
                }


                const checkInDate = new Date(indate);
                const checkOutDate = new Date(outdate);
                const minCheckoutDate = new Date(checkInDate);
                minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);


                if (checkOutDate < minCheckoutDate) {
                    alert("Check-out date must be at least one day after check-in date.");
                    return;
                }


                var formData = new FormData(this);
                formData.append("action", "reservation");


                $.ajax({
                    url: "core/reservation_controller.php",
                    type: "POST",
                    data: formData,
                    success: function (data) {
                        console.log(data);
                        if (data.error == 1) {
                            // Handle error if needed
                        } else {
                            window.location.href = "payment.php";
                            return;
                        }
                    },
                    error: function (data, message, errorThrown) {
                        console.log(errorThrown);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
</body>
</html>
