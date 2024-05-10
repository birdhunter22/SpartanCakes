

<section class="main-section alabaster" id="curls">
    <div class="container fullsize">
        <h2>Combined Users</h2>
        <?php
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

        // Fetch first URL
        curl_setopt($curl_handle, CURLOPT_URL, "https://thedanishpastry.com/user_curl.php");
        $contents = curl_exec($curl_handle);

        // Fetch second URL
        curl_setopt($curl_handle, CURLOPT_URL, "https://ivyvo.net/expose_curl.php");
        $contents .= "," . curl_exec($curl_handle);

        curl_close($curl_handle);

        // Display each user on a new line
        foreach (explode(",", $contents) as $content) {
            echo "<p>" . htmlspecialchars($content) . "</p>";
        }
        ?>
    </div>
</section>
