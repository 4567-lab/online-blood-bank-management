<?php include 'header.php'; ?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-text">
        <h2>Welcome</h2>
        <h1>DONATE BLOOD !!!</h1>

        <p>If you're a blood donor,</p>
        <p>you're a <strong>HERO</strong> to someone, somewhere,</p>
        <p>who received your Gracious Gift of Life !!!</p>

        <a href="donor.php" class="hero-btn">Get Started</a>
    </div>

    <!-- Hero Video Animation -->
    <div class="hero-animation">
        <video autoplay loop muted playsinline class="hero-video">
            <source src="hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Inline CSS -->
<style>
/* Hero Section */
.hero-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    padding: 60px 40px;
    position: relative;
    perspective: 1500px;
}

.hero-text {
    max-width: 600px;
}

.hero-btn {
    display: inline-block;
    margin-top: 25px;
    padding: 14px 32px;
    background: linear-gradient(135deg, #b30000, #800000);
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(179, 0, 0, 0.35);
}

/* Video Container */
.hero-animation {
    position: relative;
    width: 400px; /* visible size */
    height: 600px;
}

.hero-video {
    width: 100%;
    height: 100%;
    object-fit: cover; /* keeps aspect ratio and fills container */
    border-radius: 15px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.3);
    animation: float3D 4s ease-in-out infinite, slideInRight 1.2s ease-out forwards;
}

/* Slide-In and Float Animation */
@keyframes slideInRight {
    from { opacity: 0; transform: translateX(80px); }
    to { opacity: 1; transform: translateX(0); }
}

@keyframes float3D {
    0% { transform: translateY(0) rotateY(0deg); }
    25% { transform: translateY(-10px) rotateY(5deg); }
    50% { transform: translateY(0) rotateY(0deg); }
    75% { transform: translateY(-10px) rotateY(-5deg); }
    100% { transform: translateY(0) rotateY(0deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        flex-direction: column-reverse;
        text-align: center;
        gap: 30px;
    }

    .hero-animation {
        width: 300px;
        height: 200px;
        margin: 0 auto;
    }
}
</style>
