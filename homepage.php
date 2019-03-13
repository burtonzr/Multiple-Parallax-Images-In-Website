<!DOCTYPE html>
<html>
    <head>
        <?php 
            include('cdnConnect.php'); 
        ?>
    </head>
    <body>
        <div class="homeImage">
            <h1 class="title" id="jared">Jared Rye</h1>
        </div>
        <div class="container-fluid bg-light">
            <div class="row pt-3">
                <div class="col-8 responsiveCalendar">
                    <h3 class="text-center myLead">Event Calendar</h3>
                    <iframe src="https://calendar.google.com/calendar/embed?src=burtonzr%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="yes"></iframe>
                </div>
                <div class="col-4">
                    <div class="links-nav">
                        <h3 class="text-center myLead">Links</h3>
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#art" class="nav-link">Art</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#friend" class="nav-link">Friends</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#newsfeed" class="nav-link">Newsfeeds</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#friend" class="nav-link">Friends</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Shopify</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Teespring</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Youtube Feed</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="artImage pb-4 mt-4" id="art">
                <h1 class="title">Artwork</h1>
            </div>
            <div class="friendImage mt-4" id="friend">
                <h1 class="title">Friends</h1>
            </div>
            <div class="newsfeedImage mt-4" id="newsfeed">
                <h1 class="title">Newsfeed</h1>
            </div>
            <div class="container">
                <div class="newsfeed pt-4">
                    <?php
                        $sql = "SELECT Name, Description, ReadMore, Date FROM newsfeed";
                        $result = mysqli_query($db, $sql);
                        if($result) {
                            echo '<table>';
                            echo '<th>Name</th><th>Description</th><th>Read More</th><th>Date</th>';
                            $count = 0;
                            while($row = mysqli_fetch_assoc($result)) {
                                $count += 1;
                                echo '<tr>';
                                foreach($row as $k => $v) {
                                    echo "<td>" . $v . "</td>";
                                }
                                echo '</tr>';
                            }
                            echo '</table>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>
