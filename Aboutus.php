<!DOCTYPE html>
<html>
<head>
  <title>About Us - Online Charity & Donation App</title>
  <style>
    /* CSS styles */
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    .header {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      background-image: url("https://images.unsplash.com/photo-1601582561597-219b6ef36b79?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=tim-mossholder-7LhHKEjqq3c-unsplash.jpg&w=1920");
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
    }
    .header:before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }
    .header h1 {
      color: #fff;
      font-size: 6rem;
      text-transform: uppercase;
      text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
      margin: 0;
      z-index: 1;
    }
    .team {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 50px;
    }
    .team-member {
      width: 300px;
      text-align: center;
      padding: 20px;
      margin: 20px;
      box-sizing: border-box;
      transition: all 0.3s ease-in-out;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .team-member:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    .team-member img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: block;
      transition: all 0.3s ease-in-out;
    }
    .team-member img:hover {
      transform: scale(1.1);
    }
    .team-member h3 {
      font-size: 24px;
      color: #333;
      margin-top: 0;
      margin-bottom: 10px;
    }
    .team-member p {
      color: #666;
      margin-top: 10px;
    }
    .event {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 50px;
    }
    .event-card {
      width: 300px;
      margin: 20px;
      box-sizing: border-box;
      background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-in-out;
}
.event-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}
.event-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}
.event-card h3 {
  font-size: 24px;
  color: #333;
  margin-top: 10px;
  margin-bottom: 10px;
}
.event-card p {
  color: #666;
  margin-top: 10px;
  margin-bottom: 10px;
  text-align: justify;
}
.event-card a {
  display: block;
  margin-top: 10px;
  text-align: center;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  text-decoration: none;
  border-radius: 5px;
  transition: all 0.3s ease-in-out;
}
.event-card a:hover {
  background-color: #2E8B57;
}
.cta-section {
  background-color: #222;
  color: #fff;
  padding: 50px;
  text-align: center;
}
.cta-section h2 {
  font-size: 48px;
  margin-top: 0;
}
.cta-section p {
  font-size: 24px;
  margin-top: 20px;
  margin-bottom: 40px;
}
.cta-section a {
  display: inline-block;
  padding: 15px 30px;
  background-color: #4CAF50;
  color: #fff;
  text-decoration: none;
  font-size: 24px;
  border-radius: 5px;
  transition: all 0.3s ease-in-out;
}
.cta-section a:hover {
  background-color: #2E8B57;
}
/* Responsive styles */
@media (max-width: 768px) {
  .header {
    height: 60vh;
  }
  .header h1 {
    font-size: 4rem;
  }
  .team-member {
    width: 200px;
    margin: 10px;
  }
  .event-card {
    width: 250px;
    margin: 10px;
  }
  .cta-section {
    padding: 20px;
  }
  .cta-section h2 {
    font-size: 36px;
  }
  .cta-section p {
    font-size: 20px;
  }
  .cta-section a {
    font-size: 20px;
    padding: 10px 20px;
  }
}
</style>
</head>
<body>
  <!-- Header section -->
  <section class="header">
    <h1>About Us</h1>
  </section>
  <!-- Team section -->
  <section class="team">
    <div class="team-member">
      <img src="https://images.unsplash.com/photo-1621431207196-36110f9e0325?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=terry-vlis
      sa-7jK4_zn3HQ-unsplash.jpg&w=1920" alt="Team member 1">
<h3>John Doe</h3>
<p>CEO</p>
</div>
<div class="team-member">
<img src="https://images.unsplash.com/photo-1621431207196-36110f9e0325?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=terry-vlis

sa-7jK4_zn3HQ-unsplash.jpg&w=1920" alt="Team member 2">
<h3>Jane Smith</h3>
<p>COO</p>
</div>
<div class="team-member">
<img src="https://images.unsplash.com/photo-1621431207196-36110f9e0325?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=terry-vlissa-7jK4_zn3HQ-unsplash.jpg&w=1920" alt="Team member 3">


<h3>David Lee</h3>
<p>CTO</p>
</div>

  </section>
  <!-- Event section -->
  <section class="event">
    <div class="event-card">
      <img src="https://images.unsplash.com/photo-1621421253029-21d68c98b7d8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=catherine-mcmillen
-CPcT7VzGXd0-unsplash.jpg&w=1920" alt="Event 1">
<h3>Charity Auction</h3>
<p>Join us for our annual charity auction event and help us raise funds for a good cause.</p>
<button>Learn More</button>
</div>
<div class="event-card">
<img src="https://images.unsplash.com/photo-1615331616783-d49d3ef91cb9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=laura-ostrowski-

heger-X_VLMz2ZjxI-unsplash.jpg&w=1920" alt="Event 2">
<h3>Virtual Run</h3>
<p>Participate in our virtual run event and help us raise funds for a good cause. Run anytime, anywhere!</p>
<button>Learn More</button>
</div>
<div class="event-card">
<img src="https://images.unsplash.com/photo-1620466567933-fa1cc4be43e4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=marc-kleen-8PpjtL-

J0hY-unsplash.jpg&w=1920" alt="Event 3">
<h3>Charity Gala</h3>
<p>Join us for our annual charity gala event and help us raise funds for a good cause.</p>
<button>Learn More</button>
</div>

  </section>
</body>
</html>
