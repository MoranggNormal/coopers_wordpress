<section class="plan-list">

    <?php
    $plans = get_field('plans');

    if ($plans):
        foreach ($plans as $plan): ?>
            <div class="card-list">
                <div class="top-list"></div>
                <div class="top-text">
                    <h3 class=""><?php echo esc_html($plan['pricing']); ?></h3>
                    <h4 class="">
                        <?php echo esc_html($plan['title']); ?>

                        <br>
                        <span>
                            <?php echo esc_html($plan['subtitle']); ?>
                        </span>
                    </h4>
                </div>
                <?php
                $plans_items = get_field('plans_items');
                if ($plans_items): ?>
                    <div class="plans">
                        <ul>
                            <?php foreach ($plans_items as $item):
                            ?>
                                <li>
                                    <?php
                                    if (isset($item['available_for'])) {
                                        if (is_plan_available($item['available_for'], $plan['title'])) {
                                            echo '<img src="/wp-content/uploads/2024/10/checked.png" alt="Checked" />';
                                        } else {
                                            echo '<img src="/wp-content/uploads/2024/10/unchecked.png" alt="Unchecked" />';
                                        }
                                    }
                                    echo esc_html($item['text']);
                                    ?>
                                </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="">
                    <button class="coopers-btn">get in touch</button>
                </div>
            </div>
        <?php endforeach;
        ?>
    <?php endif;
    ?>



    <img src="/wp-content/uploads/2024/10/graphism.png" alt="Graphism" class="graphism" width="130" height="130" />
</section>