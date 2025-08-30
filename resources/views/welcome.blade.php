<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coming Soon</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');

  * { margin:0; padding:0; box-sizing:border-box; }
  body, html {
    height:100%;
    font-family: 'Poppins', sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg, #ff758c, #ff7eb3);
    color:#fff;
    text-align:center;
    overflow:hidden;
  }
  .container { max-width:600px; padding:20px; animation: fadeIn 2s ease-in; }
  h1 { font-size:3rem; margin-bottom:15px; text-transform: uppercase; letter-spacing:2px; }
  p { font-size:1.2rem; margin-bottom:25px; line-height:1.5; }
  .countdown { font-size:2rem; font-weight:800; margin-top:15px; }
  .social-container { margin-top:25px; }
  a.social { color:#fff; margin:0 10px; text-decoration:none; font-size:1.5rem; transition: 0.3s; }
  a.social:hover { color:#000; }
  @keyframes fadeIn { from {opacity:0; transform:translateY(-20px);} to {opacity:1; transform:translateY(0);} }
  @media(max-width:500px){ h1{ font-size:2rem;} p{ font-size:1rem;} .countdown{ font-size:1.5rem;} }
</style>
</head>
<body>
<div class="container">
  <h1>Coming Soon</h1>
  <p>We are working hard to bring you an amazing experience. Stay connected and check back soon!</p>
  <div class="countdown" id="countdown"></div>

  <div class="social-container">
    <a href="#" class="social">Facebook</a>
    <a href="#" class="social">Twitter</a>
    <a href="#" class="social">Instagram</a>
  </div>
</div>

<script>
  // Countdown timer
  const launchDate = new Date("2025-12-31T00:00:00").getTime();
  const countdownElement = document.getElementById("countdown");

  setInterval(() => {
    const now = new Date().getTime();
    const distance = launchDate - now;

    if(distance < 0){
      countdownElement.innerHTML = "We are live!";
      return;
    }

    const days = Math.floor(distance / (1000*60*60*24));
    const hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
    const minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
    const seconds = Math.floor((distance % (1000*60)) / 1000);

    countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
  }, 1000);
</script>
</body>
</html>
