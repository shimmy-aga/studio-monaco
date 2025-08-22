
<!-- CALENDAR SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ---------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$events = $events ?? [];

$render_time = static function (string $start = '', string $end = ''): string {
    $start = trim($start);
    $end   = trim($end);
    if ($start === '' && $end === '') return '';
    if ($start !== '' && $end === '') return htmlspecialchars($start);
    if ($start === '' && $end !== '') return htmlspecialchars($end);
    return htmlspecialchars($start . ' - ' . $end);
};
?>

<section class="section calendar-section">
    <div class="calendar-wrapper">
        <div class="left">
            <div class="calendar">

                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">augustus 2025</div>
                    <i class="fas fa-angle-right next"></i>
                </div>

                <div class="weekdays">
                    <div>zo</div>
                    <div>ma</div>
                    <div>di</div>
                    <div>wo</div>
                    <div>do</div>
                    <div>vr</div>
                    <div>za</div>
                </div>

                <div class="days"></div>

            </div>
        </div>

        <div class="right">
    
            <div class="today-date">
                <div class="event-day">vrij</div>
                <div class="event-date">22 augustus 2025</div>
            </div>

            <div class="events">
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $item):
                        $title = $item['title']      ?? '';
                        $from  = $item['time_start'] ?? '';
                        $to    = $item['time_end']   ?? '';
                    ?>
                        <div class="event">
                            <div class="title">
                                <i class="fas fa-circle"></i>
                                <h3 class="event-title"><?= htmlspecialchars($title) ?></h3>
                            </div>
                            <?php $range = $render_time($from, $to); ?>
                            <?php if ($range !== ''): ?>
                                <div class="event-time">
                                    <span class="event-time"><?= $range ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="event">
                        <div class="title">
                            <i class="fas fa-circle"></i>
                            <h3 class="event-title">Geen evenementen</h3>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<!-- Static HTML -->

<!-- <section class="section calendar-section">
    <div class="calendar-wrapper">
        <div class="left">
            <div class="calendar">

                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">augustus 2025</div>
                    <i class="fas fa-angle-right next"></i>
                </div>

                <div class="weekdays">
                    <div>zo</div>
                    <div>ma</div>
                    <div>di</div>
                    <div>wo</div>
                    <div>do</div>
                    <div>vr</div>
                    <div>za</div>
                </div>

                <div class="days"></div>
            
            </div>
        </div>

        <div class="right">

            <div class="today-date">
                <div class="event-day">vrij</div>
                <div class="event-date">22 augustus 2025</div>
            </div>

            <div class="events">

                <div class="event">
                    <div class="title">
                    <i class="fas fa-circle"></i>
                    <h3 class="event-title">Anita</h3>
                    </div>
                    <div class="event-time">
                    <span class="event-time">5:04 AM - 7:07 AM</span>
                    </div>
                </div>

                <div class="event">
                    <div class="title">
                    <i class="fas fa-circle"></i>
                    <h3 class="event-title">Celli</h3>
                    </div>
                    <div class="event-time">
                    <span class="event-time">5:04 AM - 7:07 AM</span>
                    </div>
                </div>

                <div class="event">
                    <div class="title">
                    <i class="fas fa-circle"></i>
                    <h3 class="event-title">Soraya</h3>
                    </div>
                    <div class="event-time">
                    <span class="event-time">5:04 AM - 7:07 AM</span>
                    </div>
                </div>

                <div class="event">
                    <div class="title">
                    <i class="fas fa-circle"></i>
                    <h3 class="event-title">Alysia</h3>
                    </div>
                    <div class="event-time">
                    <span class="event-time">5:04 AM - 7:07 AM</span>
                    </div>
                </div>

                <div class="event">
                    <div class="title">
                    <i class="fas fa-circle"></i>
                    <h3 class="event-title">Mandy</h3>
                    </div>
                    <div class="event-time">
                    <span class="event-time">5:04 AM - 7:07 AM</span>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</section> -->