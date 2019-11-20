<li class="{{ $current == 'index' ? 'current' : ''}}"><a href="/">Home</a></li>
<li class="{{ $current == 'about' ? 'current' : ''}} dropdown"><a href="#">About Us</a>
    <ul>
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/our-team">Our Team</a></li>
        <li><a href="#faq">Faq's</a></li>
        <li><a href="#testimonial">Testimonial</a></li>
        <li><a href="#volunteer">Volunteer</a></li>
    </ul>
</li>
<li class="{{ $current == 'cause' ? 'current' : ''}}"><a href="/our-causes">Causes</a></li>
<li class="{{ $current == 'event' ? 'current' : ''}}"><a href="/events">Event</a></li>
<li class="{{ $current == 'contact' ? 'current' : ''}} "><a href="/contact">Contact</a></li>