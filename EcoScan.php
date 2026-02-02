<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoScan Dashboard</title>
    <link rel="stylesheet" href="EcoScan.css">
</head>
<body>

    <header class="header">
        <div class="brand">
            <h1><span style="color: var(--primary)">🍃</span> EcoScan</h1>
            <p>Your sustainability shopping companion</p>
        </div>
        <div class="nav-btns">
            <a href="challenges.php">
    <button class="btn-outline">🏆 Challenges</button>
</a>
           <a href="setting.php" class="btn-outline" style="text-decoration: none;">⚙️ Settings</a>
    </header>

    <button class="scan-btn">
        <span>[ ]</span> Scan New Product
    </button>

    <h2>Your Impact</h2>
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-info"><span>Products Scanned</span><h3>0</h3></div>
            <div class="icon-box bg-blue">📦</div>
        </div>
        <div class="stat-card">
            <div class="stat-info"><span>Waste Saved</span><h3>0.0kg</h3></div>
            <div class="icon-box bg-green">🍃</div>
        </div>
        <div class="stat-card">
            <div class="stat-info"><span>Eco Choices</span><h3>0</h3></div>
            <div class="icon-box bg-orange">🏅</div>
        </div>
        <div class="stat-card">
            <div class="stat-info"><span>Level</span><h3>1</h3></div>
            <div class="icon-box bg-purple">📈</div>
        </div>
    </div>

    <h2>Scan History</h2>
    <div class="history-container">
        <div class="history-header">
            <div><b>🕒 Recent Scans</b></div>
            <button style="color: #EF4444; border: 1px solid #FECACA; background: #FEF2F2; padding: 5px 10px; border-radius: 6px; cursor: pointer; font-size: 12px;">🗑️ Clear History</button>
        </div>

        <div class="history-item">
            <div class="item-main">
                <h4>Sustainable Design Framework (SDF)</h4>
                <p>EcoTech Solutions</p>
                <p style="font-size: 11px;">Jan 29, 2026 • 1:45 AM</p>
            </div>
            <div class="item-meta">
                <div class="grade grade-a">A</div>
                <div class="recyc-info"><span>Recyclability</span><b>95%</b></div>
            </div>
        </div>

        <div class="history-item">
            <div class="item-main">
                <h4>Standard Waste Bin</h4>
                <p>Generic</p>
                <p style="font-size: 11px;">Jan 27, 2026 • 8:03 AM</p>
            </div>
            <div class="item-meta">
                <div class="grade grade-c">C</div>
                <div class="recyc-info"><span>Recyclability</span><b>80%</b></div>
            </div>
        </div>
    </div>

</body>
</html>