<div>
<div class="founder-card <?php echo $background_class; ?>" >
    <a href="person.php">
        <div class="infos">
            <div class="image">
                <img width="100%" height="100%" src="<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>">
            </div>
            <div class="info">
                <div class="info1 mb-2">
                    <span class="name text-ellipsis">
                        <?php echo $member['name']; ?>
                    </span>
                    <?php if (!empty($member['title'])): ?>
                        <small class="function">
                            <?php echo htmlspecialchars($member['title']); ?>
                        </small>
                    <?php endif; ?>
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
                            <?php
                            $location = $member['location'];
                            if (strlen($location) > 13) {
                                echo substr($location, 0, 10) . '...';
                            } else {
                                echo $location;
                            }
                            ?>
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
</div>