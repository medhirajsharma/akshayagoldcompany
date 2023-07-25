
<style>
    
.swiper .content-wrapper {
  position: relative;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr;
  grid-template-areas: ".";
  width: 100%;
  justify-items: center;
  align-items: center;
}
.swiper .content-wrapper .content {
  padding: 1em;
  opacity: 0;
  width: 100%;
  max-width: 780px;
  transition-duration: 1.5s, 0.6s;
  transition-property: opacity, transform;
  color: #fff;
}
.swiper .content-wrapper .content :first-child {
  margin: 0;
}
.swiper .swiper-slide {
  margin: 0;
  height: auto;
  width: 100%;
  padding: 2em 0;
}
.swiper .swiper-slide.swiper-slide-active .swiper-image {
  transform: scale3d(1.02, 1.02, 1);
  will-change: transform;
}
.swiper .swiper-slide.swiper-slide-active .content {
  opacity: 1;
  text-align: center;
  display: grid;
  justify-items: center;
  align-items: center;
}
.swiper .swiper-nav-wrapper {
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  width: auto;
}
.swiper .swiper-nav-wrapper .swiper-button-next,
.swiper .swiper-nav-wrapper .swiper-button-prev {
  top: 0;
  top: auto;
  left: auto;
  right: auto;
  position: relative !important;
}
.swiper .swiper-nav-wrapper .swiper-button-next:after,
.swiper .swiper-nav-wrapper .swiper-button-prev:after {
  display: none;
}
.swiper .swiper-nav-wrapper .swiper-button-next,
.swiper .swiper-nav-wrapper .swiper-container-rtl .swiper-button-prev {
  background-image: url("data:image/svg+xml,%0A%3Csvg width='9px' height='16px' viewBox='0 0 9 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='chevron-right' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cpath d='M8.674805,7.066406 L1.924805,0.316406 C1.696288,0.105468 1.432619,0 1.133789,0 C0.834959,0 0.57129,0.105468 0.342773,0.316406 C0.114257,0.544923 0,0.808592 0,1.107422 C0,1.406251 0.114257,1.669921 0.342773,1.898438 L6.301758,7.857422 L0.342773,13.816406 C0.114257,14.044923 0,14.308592 0,14.607422 C0,14.906251 0.114257,15.169921 0.342773,15.398438 C0.465821,15.521485 0.584472,15.609375 0.69873,15.662109 C0.812989,15.714844 0.958007,15.741211 1.133789,15.741211 C1.309571,15.741211 1.454589,15.714844 1.568848,15.662109 C1.683106,15.609375 1.801757,15.521485 1.924805,15.398438 L8.674805,8.648438 C8.903321,8.419921 9.017578,8.156251 9.017578,7.857422 C9.017578,7.558592 8.903321,7.294923 8.674805,7.066406 Z' id='Path'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
  width: 20px;
  height: 20px;
  background-size: 20px 20px;
  background-repeat: no-repeat;
  margin: 0;
  padding: 0;
}
.swiper .swiper-nav-wrapper .swiper-button-prev,
.swiper .swiper-nav-wrapper .swiper-container-rtl .swiper-button-next {
  background-image: url("data:image/svg+xml,%0A%3Csvg width='9px' height='16px' viewBox='0 0 9 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='chevron-right' transform='translate(4.508789, 7.870605) rotate(-180.000000) translate(-4.508789, -7.870605) translate(-0.000000, -0.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cpath d='M8.674805,7.066406 L1.924805,0.316406 C1.696288,0.105468 1.432619,0 1.133789,0 C0.834959,0 0.57129,0.105468 0.342773,0.316406 C0.114257,0.544923 0,0.808592 0,1.107422 C0,1.406251 0.114257,1.669921 0.342773,1.898438 L6.301758,7.857422 L0.342773,13.816406 C0.114257,14.044923 0,14.308592 0,14.607422 C0,14.906251 0.114257,15.169921 0.342773,15.398438 C0.465821,15.521485 0.584472,15.609375 0.69873,15.662109 C0.812989,15.714844 0.958007,15.741211 1.133789,15.741211 C1.309571,15.741211 1.454589,15.714844 1.568848,15.662109 C1.683106,15.609375 1.801757,15.521485 1.924805,15.398438 L8.674805,8.648438 C8.903321,8.419921 9.017578,8.156251 9.017578,7.857422 C9.017578,7.558592 8.903321,7.294923 8.674805,7.066406 Z' id='Path'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
  width: 20px;
  height: 20px;
  background-size: 20px 20px;
  background-repeat: no-repeat;
  margin: 0;
  padding: 0;
}

.swiper-pagination {
  margin: 0;
  padding: 0;
  width: auto;
  position: relative !important;
  display: block;
  width: auto;
}
.swiper-pagination .swiper-pagination-bullets {
  margin: 0;
}
.swiper-pagination .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0;
  background: #fff !important;
}

.swiper-pagination-bullet {
  background: #fff !important;
}

.swiper-pagination-bullets.swiper-pagination-horizontal {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  bottom: 0;
  top: 0;
  bottom: 0;
  width: auto;
  padding: 0 1.5em;
}</style>
<section id="review" style="background-image: url(assets/images/testimonial_back.webp);" class="pb-5">
    <div class="text-center pt-3">
        <h2 style="color:#ffff66;">Testimonial</h2>
        <span class="heading_border yellow"></span>
    </div>
		
<div class="swiper">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
		    
			<!-- Slides -->
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Yash Jadhav</h1>
				
						
						<p>Fast service in selling my Gold Akshay Gold company Hubli Branch is very good helpful costumer handling good staff thanks for Hubli Branch.</p>
						<!--<a href="" class="button">Read More</a>-->
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Rajini Kanth</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>Best gold buyer in Davanagere I got very good price for my old gold compare other companies thank you akshaya gold company Davanagere.</p>
						<a href="" class="button">Read More</a>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Annesh Rudrappa</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>very good company to sell gold i am satisfied with the price and service given by the company thank you akshaya gold company davanagere.</p>
						 
					</div>
				</div>
			</div>
			
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Shri Ramani Ventures</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>Best price for my gold ornaments akshaya gold helping me for release gold in Bank by online transfer thanks. </p>
						 
					</div>
				</div>
			</div>
			
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Yuvarani Uvi</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>Very good service friendly employees... Explained all details with kind... Received spot payment... Best place to sell old gold in trichy.</p>
					</div>
				</div>
			</div>
			
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Malarvili</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>Good and clear service.. staff explained full details about gold purity band their value in market. I got good value for my jewelry. We are free to ask many questions regarding our sales. Best company to sell our gold .. thanks to akshaya gold company Arumbakkam.</p>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content-wrapper">
					<div class="content">
						<h1>Sampath</h1>
						<svg width="79px" height="16px" viewBox="0 0 79 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M8,0 L10.1640796,6.10199526 L16,6.10199526 L11.2461199,9.68514392 L12.9312641,15.9822618 L8,12.2039912 L3.06873586,15.9822618 L4.75388012,9.68514392 L0,6.10199526 L5.83592042,6.10199526 L8,0 Z M24,0 L26.1640796,6.10199526 L32,6.10199526 L27.2461199,9.68514392 L28.9312641,15.9822618 L24,12.2039912 L19.0687359,15.9822618 L20.7538801,9.68514392 L16,6.10199526 L21.8359204,6.10199526 L24,0 Z M40,0 L42.1640796,6.10199526 L48,6.10199526 L43.2461199,9.68514392 L44.9312641,15.9822618 L40,12.2039912 L35.0687359,15.9822618 L36.7538801,9.68514392 L32,6.10199526 L37.8359204,6.10199526 L40,0 Z M68.8359204,6.10199526 L71,0 L73.1640796,6.10199526 L79,6.10199526 L74.2461199,9.68514392 L75.9312641,15.9822618 L71,12.2039912 L66.0687359,15.9822618 L67.7538801,9.68514392 L63.5,6.478 L59.2461199,9.68514392 L60.9312641,15.9822618 L56,12.2039912 L51.0687359,15.9822618 L52.7538801,9.68514392 L48,6.10199526 L53.8359204,6.10199526 L56,0 L58.1640796,6.10199526 L68.8359204,6.10199526 Z" id="Combined-Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
							</g>
						</svg>
						<p>Nice experience. Tambaram branch person he explained politely with all the details. I sold my jewels without any hassles. I recommend this tambaram branch.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="swiper-nav-wrapper">
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
    
</section>

  