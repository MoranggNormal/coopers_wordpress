<?php
function is_plan_available($available_for, $plan_title)
{
    if (is_array($available_for)) {
        foreach ($available_for as $available_plan) {
            if (stripos($plan_title, $available_plan) !== false) {
                return true;
            }
        }
    }
    return false;
}
