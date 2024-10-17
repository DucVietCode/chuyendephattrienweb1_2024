<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3008">
    <div class="pricing">
        <h1>Your Trusted Partner for Fast, Reliable Phone Repairs</h1>
        <div class="pricing-cards">
            <div class="card starter">
                <div class="card-header-bg">
                    <h2>Starter Pack</h2>
                    <p>Quisque bibendum justo dui porta cras montes aliquet</p>
                </div>
                <h3>$49.99</h3>
                <span>Monthly</span>
                <ul>
                    <li>Nec pellentesque pede</li>
                    <li>Pellentesque magna</li>
                    <li>Quisque pretium tempus</li>
                    <li>Sagittis ligula conubia</li>
                    <li>Tincidunt lacinia</li>
                </ul>
                <button>ORDER NOW</button>
            </div>

            <div class="card premium">
                <div class="card-header-bg">
                    <h2>Premium Pack</h2>
                    <p>Quisque bibendum justo dui porta cras montes aliquet</p>
                </div>
                <h3>$79.99</h3>
                <span>Monthly</span>
                <ul>
                    <li>Nec pellentesque pede</li>
                    <li>Pellentesque magna</li>
                    <li>Quisque pretium tempus</li>
                    <li>Sagittis ligula conubia</li>
                    <li>Tincidunt lacinia</li>
                </ul>
                <button>ORDER NOW</button>
                <div class="label">Popular</div>
            </div>

            <div class="card ultra">
                <div class="card-header-bg">
                    <h2>Ultra Pack</h2>
                    <p>Quisque bibendum justo dui porta cras montes aliquet</p>
                </div>
                <h3>$99.99</h3>
                <span>Monthly</span>
                <ul>
                    <li>Nec pellentesque pede</li>
                    <li>Pellentesque magna</li>
                    <li>Quisque pretium tempus</li>
                    <li>Sagittis ligula conubia</li>
                    <li>Tincidunt lacinia</li>
                </ul>
                <button>ORDER NOW</button>
            </div>

            <div class="card supreme">
                <div class="card-header-bg">
                    <h2>Supreme Pack</h2>
                    <p>Quisque bibendum justo dui porta cras montes aliquet</p>
                </div>
                <h3>$149.99</h3>
                <span>Monthly</span>
                <ul>
                    <li>Nec pellentesque pede</li>
                    <li>Pellentesque magna</li>
                    <li>Quisque pretium tempus</li>
                    <li>Sagittis ligula conubia</li>
                    <li>Tincidunt lacinia</li>
                </ul>
                <button>ORDER NOW</button>
            </div>
        </div>

        <div class="footer">
            <span><i class="fa fa-gem"></i> PREMIUM BRAND</span>
            <p>Trusted Technicians for All Your Phone Repair Needs</p>
        </div>
    </div>
</div>