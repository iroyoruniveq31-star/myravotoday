<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyraVo Today - Fresh Flowers & Floral Arrangements | Local Florist</title>
    <meta name="description" content="MyraVo Today offers beautiful fresh flowers, custom floral arrangements, wedding bouquets, and seasonal decorations. Expert florists serving the community with passion and creativity since 1987.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fefefe;
        }

        .nav-container-8x9z {
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-4k7m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-9p3q {
            font-size: 2rem;
            font-weight: bold;
            color: #27ae60;
            text-decoration: none;
        }

        .nav-menu-5t8w {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-2r6y {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-2r6y:hover {
            color: #27ae60;
        }

        .hero-section-7h4n {
            background: linear-gradient(rgba(39, 174, 96, 0.8), rgba(46, 204, 113, 0.8)), url('https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-3m8k {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-6j9l {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle-1q5x {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-8w2z {
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-8w2z:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .section-wrapper-4n7p {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-9k3m {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .section-title-5x8q {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-7p2w {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-3k9m {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-6t4n {
            text-align: center;
        }

        .about-image-6t4n img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .services-section-2m8k {
            padding: 4rem 0;
            background: white;
        }

        .services-grid-9x4p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card-7h3q {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card-7h3q:hover {
            transform: translateY(-5px);
        }

        .service-icon-4k8m {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .service-title-6p9n {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #27ae60;
        }

        .history-section-8m4k {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            padding: 4rem 0;
        }

        .history-timeline-3x7p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .timeline-item-9k2m {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .timeline-year-5q8n {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #fdcb6e;
        }

        .gallery-section-7p4k {
            padding: 4rem 0;
            background: #f1f2f6;
        }

        .gallery-grid-2m9x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 3rem;
        }

        .gallery-item-6k3p {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 250px;
        }

        .gallery-item-6k3p img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item-6k3p:hover img {
            transform: scale(1.1);
        }

        .team-section-4n8m {
            padding: 4rem 0;
            background: white;
        }

        .team-grid-9x2k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-card-7p5q {
            text-align: center;
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
        }

        .team-photo-3k9m {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #27ae60;
        }

        .reviews-section-8k4p {
            background: linear-gradient(135deg, #a29bfe, #6c5ce7);
            color: white;
            padding: 4rem 0;
        }

        .reviews-grid-5m7x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-9p3k {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .review-stars-2k8m {
            color: #fdcb6e;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-7x4n {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-6p9k {
            font-weight: bold;
            text-align: right;
        }

        .contact-section-3m8p {
            padding: 4rem 0;
            background: #2d3436;
            color: white;
        }

        .contact-grid-7k2m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .contact-info-9x5p {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
        }

        .contact-item-4k8n {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            gap: 1rem;
        }

        .contact-icon-6m3k {
            font-size: 1.5rem;
            color: #00b894;
        }

        .phone-link-8p7x {
            color: white;
            text-decoration: none;
        }

        .phone-link-8p7x:hover {
            color: #00b894;
        }

        .footer-section-2k9m {
            background: #1a1a1a;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .modal-overlay-5x8k {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-9p4m {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            color: #2c3e50;
        }

        .modal-close-7k3x {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .specialty-section-4x9k {
            background: linear-gradient(135deg, #fd79a8, #e84393);
            color: white;
            padding: 4rem 0;
        }

        .specialty-grid-8m2p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .specialty-card-6k9x {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .process-section-7m4k {
            padding: 4rem 0;
            background: #f8f9fa;
        }

        .process-steps-3x8p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step-9k5m {
            text-align: center;
            padding: 2rem;
        }

        .step-number-2p7x {
            width: 60px;
            height: 60px;
            background: #27ae60;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        @media (max-width: 768px) {
            .nav-menu-5t8w {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-6j9l {
                font-size: 2.5rem;
            }
            
            .about-grid-7p2w {
                grid-template-columns: 1fr;
            }
            
            .nav-wrapper-4k7m {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container-8x9z">
        <div class="nav-wrapper-4k7m">
            <a href="#home" class="logo-section-9p3q">MyraVo Today</a>
            <ul class="nav-menu-5t8w">
                <li><a href="#about" class="nav-link-2r6y">About Us</a></li>
                <li><a href="#services" class="nav-link-2r6y">Services</a></li>
                <li><a href="#history" class="nav-link-2r6y">Our Story</a></li>
                <li><a href="#gallery" class="nav-link-2r6y">Gallery</a></li>
                <li><a href="#team" class="nav-link-2r6y">Team</a></li>
                <li><a href="#specialty" class="nav-link-2r6y">Specialties</a></li>
                <li><a href="#process" class="nav-link-2r6y">Our Process</a></li>
                <li><a href="#reviews" class="nav-link-2r6y">Reviews</a></li>
                <li><a href="#contact" class="nav-link-2r6y">Contact</a></li>
                <li><a href="#" class="nav-link-2r6y" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-2r6y" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-7h4n">
        <div class="hero-content-3m8k">
            <h1 class="hero-title-6j9l">MyraVo Today</h1>
            <p class="hero-subtitle-1q5x">Creating Beautiful Moments with Fresh Flowers & Artistic Arrangements</p>
            <a href="#contact" class="cta-button-8w2z">Order Your Flowers</a>
        </div>
    </section>

    <section id="about" class="about-section-9k3m">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">About MyraVo Today</h2>
            <div class="about-grid-7p2w">
                <div class="about-text-3k9m">
                    <p>Welcome to MyraVo Today, where passion meets petals in perfect harmony. Our dedicated team of floral artists has been bringing joy and beauty to countless celebrations, special moments, and everyday occasions since our founding.</p>
                    <p>We believe that flowers have the power to express emotions that words cannot capture. Whether you're celebrating love, offering comfort, or simply brightening someone's day, our carefully crafted arrangements speak from the heart.</p>
                    <p>Every bloom we select is chosen with care, every arrangement designed with purpose, and every delivery made with love. We source our flowers from trusted growers who share our commitment to quality and freshness.</p>
                </div>
                <div class="about-image-6t4n">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Beautiful flower arrangement" />
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section-2m8k">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Our Services</h2>
            <div class="services-grid-9x4p">
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">🌹</div>
                    <h3 class="service-title-6p9n">Wedding Flowers</h3>
                    <p>Transform your special day with stunning bridal bouquets, centerpieces, and ceremony decorations that reflect your unique love story.</p>
                </div>
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">🎉</div>
                    <h3 class="service-title-6p9n">Event Arrangements</h3>
                    <p>From corporate gatherings to birthday celebrations, we create memorable floral displays that enhance any occasion.</p>
                </div>
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">💐</div>
                    <h3 class="service-title-6p9n">Daily Fresh Bouquets</h3>
                    <p>Brighten someone's day with our fresh daily selections, perfect for expressing love, gratitude, or simply spreading joy.</p>
                </div>
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">🌿</div>
                    <h3 class="service-title-6p9n">Seasonal Decorations</h3>
                    <p>Celebrate each season with our themed arrangements that capture the essence and beauty of nature's changing palette.</p>
                </div>
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">🏠</div>
                    <h3 class="service-title-6p9n">Home & Office Decor</h3>
                    <p>Enhance your living or working space with our elegant arrangements designed to complement any interior style.</p>
                </div>
                <div class="service-card-7h3q">
                    <div class="service-icon-4k8m">🚚</div>
                    <h3 class="service-title-6p9n">Same-Day Delivery</h3>
                    <p>Need flowers fast? Our reliable delivery service ensures your arrangements arrive fresh and on time, every time.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-8m4k">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Our Journey Through Time</h2>
            <div class="history-timeline-3x7p">
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">1987</div>
                    <h3>The Beginning</h3>
                    <p>MyraVo Today started as a small family business with a simple dream: to bring the beauty of nature into people's lives through exceptional floral arrangements.</p>
                </div>
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">1995</div>
                    <h3>Growing Roots</h3>
                    <p>We expanded our services to include wedding planning and established partnerships with local growers, ensuring the freshest flowers for our customers.</p>
                </div>
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">2003</div>
                    <h3>Community Focus</h3>
                    <p>Became the go-to florist for major community events and established our signature style that blends traditional techniques with modern creativity.</p>
                </div>
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">2015</div>
                    <h3>Digital Transformation</h3>
                    <p>Launched our online ordering system and expanded delivery services, making it easier than ever for customers to send beautiful flowers.</p>
                </div>
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">2020</div>
                    <h3>Sustainable Practices</h3>
                    <p>Implemented eco-friendly packaging and sourcing practices, demonstrating our commitment to environmental responsibility.</p>
                </div>
                <div class="timeline-item-9k2m">
                    <div class="timeline-year-5q8n">Today</div>
                    <h3>Continuing Excellence</h3>
                    <p>We continue to innovate and serve our community with the same passion and dedication that started our journey over three decades ago.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section-7p4k">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Our Floral Gallery</h2>
            <div class="gallery-grid-2m9x">
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Elegant rose arrangement" />
                </div>
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Wedding bouquet" />
                </div>
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Spring centerpiece" />
                </div>
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Seasonal arrangement" />
                </div>
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Corporate event flowers" />
                </div>
                <div class="gallery-item-6k3p">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Birthday arrangement" />
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team-section-4n8m">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Meet Our Team</h2>
            <div class="team-grid-9x2k">
                <div class="team-card-7p5q">
                    <div class="team-photo-3k9m">👩‍🌾</div>
                    <h3>Sarah Mitchell</h3>
                    <p><strong>Head Floral Designer</strong></p>
                    <p>With over 15 years of experience, Sarah brings creativity and expertise to every arrangement. She specializes in wedding designs and seasonal collections.</p>
                </div>
                <div class="team-card-7p5q">
                    <div class="team-photo-3k9m">👨‍💼</div>
                    <h3>Michael Chen</h3>
                    <p><strong>Operations Manager</strong></p>
                    <p>Michael ensures every order is processed efficiently and delivered with care. His attention to detail keeps our operations running smoothly.</p>
                </div>
                <div class="team-card-7p5q">
                    <div class="team-photo-3k9m">👩‍🎨</div>
                    <h3>Emma Rodriguez</h3>
                    <p><strong>Creative Director</strong></p>
                    <p>Emma's artistic vision shapes our unique style. She loves experimenting with color combinations and creating arrangements that tell a story.</p>
                </div>
                <div class="team-card-7p5q">
                    <div class="team-photo-3k9m">👨‍🚚</div>
                    <h3>David Thompson</h3>
                    <p><strong>Delivery Specialist</strong></p>
                    <p>David ensures your flowers arrive fresh and on time. His friendly service and reliability make him a favorite among our customers.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialty" class="specialty-section-4x9k">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Our Specialties</h2>
            <div class="specialty-grid-8m2p">
                <div class="specialty-card-6k9x">
                    <h3>Sympathy Arrangements</h3>
                    <p>During difficult times, our compassionate team creates meaningful tributes that honor loved ones and provide comfort to grieving families.</p>
                </div>
                <div class="specialty-card-6k9x">
                    <h3>Corporate Events</h3>
                    <p>Enhance your business gatherings with professional floral displays that create lasting impressions and reflect your company's values.</p>
                </div>
                <div class="specialty-card-6k9x">
                    <h3>Holiday Decorations</h3>
                    <p>Celebrate every holiday with our festive arrangements that capture the spirit of the season and create magical atmospheres.</p>
                </div>
                <div class="specialty-card-6k9x">
                    <h3>Custom Designs</h3>
                    <p>Have something specific in mind? Our designers work closely with you to create personalized arrangements that exceed your expectations.</p>
                </div>
                <div class="specialty-card-6k9x">
                    <h3>Subscription Services</h3>
                    <p>Enjoy fresh flowers regularly with our subscription service, perfect for homes, offices, or as a thoughtful ongoing gift.</p>
                </div>
                <div class="specialty-card-6k9x">
                    <h3>Workshop Classes</h3>
                    <p>Learn the art of floral design in our hands-on workshops, suitable for beginners and those looking to enhance their skills.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-7m4k">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Our Creative Process</h2>
            <div class="process-steps-3x8p">
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">1</div>
                    <h3>Consultation</h3>
                    <p>We listen to your vision, understand your needs, and discuss your preferences to create the perfect floral solution.</p>
                </div>
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">2</div>
                    <h3>Design Planning</h3>
                    <p>Our designers sketch concepts and select the finest flowers that align with your style and occasion requirements.</p>
                </div>
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">3</div>
                    <h3>Fresh Selection</h3>
                    <p>We carefully choose each bloom from our trusted suppliers, ensuring optimal freshness and quality for your arrangement.</p>
                </div>
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">4</div>
                    <h3>Artistic Creation</h3>
                    <p>Our skilled florists bring the design to life, combining technical expertise with artistic flair to create stunning arrangements.</p>
                </div>
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">5</div>
                    <h3>Quality Check</h3>
                    <p>Every arrangement undergoes thorough inspection to ensure it meets our high standards before leaving our studio.</p>
                </div>
                <div class="process-step-9k5m">
                    <div class="step-number-2p7x">6</div>
                    <h3>Careful Delivery</h3>
                    <p>We deliver your flowers with care, ensuring they arrive in perfect condition and ready to create magical moments.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-8k4p">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">What Our Customers Say</h2>
            <div class="reviews-grid-5m7x">
                <div class="review-card-9p3k">
                    <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"MyraVo Today created the most beautiful wedding arrangements I've ever seen. Every detail was perfect, and the flowers stayed fresh throughout our entire celebration. Absolutely magical!"</p>
                    <p class="review-author-6p9k">- Jennifer Walsh</p>
                </div>
                <div class="review-card-9p3k">
                                        <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"The team at MyraVo Today went above and beyond for our corporate event. The arrangements were sophisticated and perfectly matched our brand colors. Professional service from start to finish."</p>
                    <p class="review-author-6p9k">- Robert Kim</p>
                </div>
                <div class="review-card-9p3k">
                    <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"I order flowers monthly for my office, and MyraVo Today never disappoints. The arrangements are always fresh, creative, and bring such positive energy to our workspace."</p>
                    <p class="review-author-6p9k">- Lisa Martinez</p>
                </div>
                <div class="review-card-9p3k">
                    <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"When my grandmother passed away, MyraVo Today created the most beautiful sympathy arrangement. Their compassion and attention to detail during such a difficult time meant everything to our family."</p>
                    <p class="review-author-6p9k">- Thomas Anderson</p>
                </div>
                <div class="review-card-9p3k">
                    <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"The surprise bouquet I ordered for my wife's birthday was absolutely stunning. Same-day delivery was perfect, and her reaction was priceless. Thank you for making her day special!"</p>
                    <p class="review-author-6p9k">- Mark Johnson</p>
                </div>
                <div class="review-card-9p3k">
                    <div class="review-stars-2k8m">★★★★★</div>
                    <p class="review-text-7x4n">"I've been taking their floral design workshops for six months now. The instructors are knowledgeable and patient, and I've learned so much about creating beautiful arrangements myself."</p>
                    <p class="review-author-6p9k">- Amanda Foster</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-3m8p">
        <div class="section-wrapper-4n7p">
            <h2 class="section-title-5x8q">Get In Touch</h2>
            <div class="contact-grid-7k2m">
                <div class="contact-info-9x5p">
                    <h3>Visit Our Studio</h3>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">📍</span>
                        <span>1247 Blossom Avenue, Garden District, Floreville, FL 32801</span>
                    </div>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">📞</span>
                        <a href="tel:+15559876543" class="phone-link-8p7x">(555) 987-6543</a>
                    </div>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">✉️</span>
                        <span>hello@myravotoday.com</span>
                    </div>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">🕒</span>
                        <span>Mon-Sat: 8:00 AM - 7:00 PM<br>Sunday: 10:00 AM - 5:00 PM</span>
                    </div>
                </div>
                <div class="contact-info-9x5p">
                    <h3>Emergency Orders</h3>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">🚨</span>
                        <a href="tel:+15559876544" class="phone-link-8p7x">(555) 987-6544</a>
                    </div>
                    <p>For urgent same-day orders and emergency floral needs, call our dedicated hotline available 24/7.</p>
                </div>
                <div class="contact-info-9x5p">
                    <h3>Wedding Consultations</h3>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">💒</span>
                        <a href="tel:+15559876545" class="phone-link-8p7x">(555) 987-6545</a>
                    </div>
                    <p>Schedule a personalized consultation with our wedding specialists to discuss your special day arrangements.</p>
                </div>
                <div class="contact-info-9x5p">
                    <h3>Corporate Services</h3>
                    <div class="contact-item-4k8n">
                        <span class="contact-icon-6m3k">🏢</span>
                        <a href="tel:+15559876546" class="phone-link-8p7x">(555) 987-6546</a>
                    </div>
                    <p>Connect with our corporate team for bulk orders, event planning, and ongoing business partnerships.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section-2k9m">
        <div class="section-wrapper-4n7p">
            <p>© 2024 MyraVo Today. All rights reserved. | Creating beautiful moments with fresh flowers since 1987.</p>
            <p>Licensed Florist | Insured Delivery Service | Eco-Friendly Practices</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-5x8k">
        <div class="modal-content-9p4m">
            <button class="modal-close-7k3x" onclick="closeModal('privacy')">×</button>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>MyraVo Today collects information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, billing and delivery addresses, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Process and fulfill your flower orders</li>
                <li>Communicate with you about your orders and our services</li>
                <li>Provide customer support and respond to your inquiries</li>
                <li>Send you promotional materials (with your consent)</li>
                <li>Improve our services and website functionality</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share your information with trusted service providers who assist us in operating our website and conducting our business, provided they agree to keep this information confidential.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@myravotoday.com or call (555) 987-6543.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-5x8k">
        <div class="modal-content-9p4m">
            <button class="modal-close-7k3x" onclick="closeModal('terms')">×</button>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using MyraVo Today's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Services Description</h3>
            <p>MyraVo Today provides floral arrangement services, including but not limited to fresh flower bouquets, wedding arrangements, event decorations, and delivery services.</p>
            
            <h3>Order and Payment Terms</h3>
            <p>All orders are subject to acceptance by MyraVo Today. Payment is required at the time of order placement. We accept major credit cards and electronic payments. All prices are subject to change without notice.</p>
            
            <h3>Delivery Policy</h3>
            <p>We strive to deliver all orders on the requested date and time. However, delivery times are estimates and may be affected by weather conditions, traffic, or other circumstances beyond our control. Same-day delivery orders must be placed before 2:00 PM.</p>
            
            <h3>Product Quality</h3>
            <p>We guarantee the freshness and quality of our flowers at the time of delivery. Due to the natural nature of flowers, some variation in appearance from photos is normal. We will replace any arrangements that do not meet our quality standards.</p>
            
            <h3>Cancellation and Refund Policy</h3>
            <p>Orders may be cancelled up to 24 hours before the scheduled delivery date for a full refund. Same-day orders cannot be cancelled once processing has begun. Refunds will be processed within 5-7 business days.</p>
            
            <h3>Limitation of Liability</h3>
            <p>MyraVo Today's liability is limited to the purchase price of the floral arrangement. We are not responsible for any indirect, incidental, or consequential damages.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, please contact us at legal@myravotoday.com or call (555) 987-6543.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function openModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-overlay-5x8k')) {
                e.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-8x9z');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(232, 245, 232, 0.95)';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #e8f5e8, #f0f8f0)';
                nav.style.backdropFilter = 'none';
            }
        });

        // Add animation to service cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and other elements for animation
        document.querySelectorAll('.service-card-7h3q, .team-card-7p5q, .review-card-9p3k').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add hover effects to gallery items
        document.querySelectorAll('.gallery-item-6k3p').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Add click tracking for phone numbers (for analytics)
        document.querySelectorAll('.phone-link-8p7x').forEach(link => {
            link.addEventListener('click', function() {
                // This would typically send an event to your analytics platform
                console.log('Phone number clicked:', this.textContent);
            });
        });

        // Add form validation if contact form is added later
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add loading animation for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        });

        // Add mobile menu toggle functionality
        function toggleMobileMenu() {
            const menu = document.querySelector('.nav-menu-5t8w');
            menu.classList.toggle('mobile-active');
        }

        // Add search functionality placeholder
        function initializeSearch() {
            // Placeholder for future search functionality
            console.log('Search functionality initialized');
        }

        // Initialize all JavaScript functionality
        document.addEventListener('DOMContentLoaded', function() {
            initializeSearch();
            
            // Add any additional initialization code here
            console.log('MyraVo Today website loaded successfully');
        });

        // Add seasonal theme switching (placeholder)
        function updateSeasonalTheme() {
            const currentMonth = new Date().getMonth();
            const body = document.body;
            
            // Spring theme (March-May)
            if (currentMonth >= 2 && currentMonth <= 4) {
                body.classList.add('spring-theme');
            }
            // Summer theme (June-August)
            else if (currentMonth >= 5 && currentMonth <= 7) {
                body.classList.add('summer-theme');
            }
            // Fall theme (September-November)
            else if (currentMonth >= 8 && currentMonth <= 10) {
                body.classList.add('fall-theme');
            }
            // Winter theme (December-February)
            else {
                body.classList.add('winter-theme');
            }
        }

        // Call seasonal theme update
        updateSeasonalTheme();
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>


