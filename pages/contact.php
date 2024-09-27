<?php
session_start(); // Start the session

// Check for messages
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $message_type = $_SESSION['message_type']; // success or error
    // Clear the message from the session
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <div class="contact-content">
        <?php include '../partial/header.php'; ?>

        <main class="contact">
            <h1>Have a question?</h1>

            <div class="contact-container">
                <form action="../php/handleMessages.php" method="POST">
                    <h3>Leave us a message</h3>
                    <?php if (isset($message)): ?>
                        <div class="<?php echo htmlspecialchars($message_type); ?>">
                            <?php echo htmlspecialchars($message); ?>
                        </div>
                    <?php endif; ?>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <input type="text" name="subject" placeholder="Enter your subject" >
                    <textarea rows="10" name="message" placeholder="Entext your message" required></textarea>
                    <button class="main-button">Send</button>
                </form>
                <div class="contact-info">
                    <h3>Our contact information</h3>
                    <h4>Adress: Skolas iela 2, Riga, Latvia</h4>
                    <h4>Phone: +37123232323</h4>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="4">Office Working hours</th>
                            </tr>
                        </thead>
                        <tbody>   
                            <tr>
                                <td>Monday</td>
                                <td></td>
                                <td>10:00</td>
                                <td>17:00</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td></td>
                                <td>8:00</td>
                                <td>17:00</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td></td>
                                <td>8:00</td>
                                <td>17:00</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td></td>
                                <td>9:00</td>
                                <td>17:00</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td></td>
                                <td>8:00</td>
                                <td>15:00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Saturday</td>
                                <td></td>
                                <td colspan="2"rowspan="2">Closed</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </main>

        <?php include '../partial/footer.php'; ?>
    </div>
</body>
</html>