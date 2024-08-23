<div class="founder-card">
    <a href="person.php">
        <div class="infos">
            <div class="image">
                <img width="100%" height="100%" src="<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>">
            </div>
            <div class="info">
                <div>
                    <span class="name text-ellipsis">
                        <?php echo $member['name']; ?>
                    </span>
                    <!-- <small class="function">
                            Front-end dev
                        </small> -->
                </div>
                <div class="stats">
                    <span class="flex flex-col">
                        Service
                        <span class="state-value">
                        <?php echo $member['years_of_service']; ?> 
                        </span>
                    </span>
                    <span class="flex">
                    Location
                        <span class="state-value">
                        <?php echo $member['location']; ?> 
                        </span>
                    </span>

                </div>
            </div>
        </div>
        <!-- <button class="request" type="button">
        Read more
    </button> -->
    </a>
</div>