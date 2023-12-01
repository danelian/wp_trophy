<?php get_header(); ?>

<section class="section-home">
	<div class="container">
		<div class="section-search">
			<h1 class="page-title"><?php echo __("What's biting you?", 'trophy') ?></h1>
			<?php echo do_shortcode('[ivory-search id="181" title="AJAX Search Form"]'); ?>
		</div>

		<div class="section-categories">
			<a href="<?php the_field('category_fishes_link'); ?>" class="category-item">
				<h2 class="category-title"><?php the_field('category_fishes_title'); ?></h2>
				<p class="category-descr"><?php the_field('category_fishes_descr'); ?></p>
				<svg width="210" height="166" viewBox="0 0 210 166" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M208.066 5.54843C202.638 3.17053 196.983 2.26466 191.102 3.51023C187.031 4.4161 182.959 5.32196 179.114 6.90723C170.519 10.3042 162.263 14.2674 153.781 17.7776C146.316 21.0614 138.626 22.9864 130.37 20.8349C129.465 20.6085 128.447 20.1555 127.542 19.7026C128.334 19.1364 129.126 18.457 129.804 17.8909C130.257 17.4379 130.709 16.8718 131.048 16.4188C130.483 16.1924 129.917 15.7394 129.352 15.6262C122.679 14.9468 117.024 12.4557 112.501 7.92633C108.09 3.51023 111.257 0 108.655 0C107.185 0 101.417 2.3779 99.6077 3.28377C94.9708 5.54843 90.8993 8.60573 87.0541 12.0027C86.1493 12.7954 84.7922 13.4748 83.5481 13.588C79.5898 13.8145 75.6314 13.4748 71.7862 13.8145C64.7742 14.2674 57.8754 14.9468 50.9766 15.8527C47.923 16.3056 44.9825 17.3247 42.042 18.1173C31.6372 20.8349 22.7026 25.3643 15.8038 32.7244C15.1252 33.4038 14.7859 33.5171 14.5598 33.2906C13.4288 31.9318 13.5419 27.9686 13.8812 26.4966C14.1074 25.704 13.5419 25.7039 12.9764 25.8172C10.7145 26.1569 8.22639 27.0627 4.15495 33.97C1.77994 37.9331 0.76208 43.9345 1.55375 49.5962C2.11923 53.5593 2.23232 56.6166 1.10137 60.8063C0.083504 64.6562 -0.255782 69.0723 0.196601 73.1487C1.10137 83 4.49424 92.1719 9.80973 100.664C14.4467 108.025 20.2145 114.366 26.5479 120.254C34.2384 127.387 43.3992 132.596 52.3337 138.031C53.3516 138.711 54.4825 139.277 55.5004 139.843C53.0123 144.599 44.6432 147.883 42.3813 150.147C42.042 150.487 41.9289 151.053 41.9289 151.506C42.042 151.959 42.3813 152.412 42.8337 152.638C49.3932 155.809 58.6671 157.055 67.6016 156.715C72.804 156.488 92.2565 152.752 97.7982 151.959C101.643 151.393 106.733 152.638 110.578 154.563C115.215 156.941 119.852 159.206 124.828 160.791C130.822 162.716 136.929 164.301 143.15 165.207C147.673 165.887 150.84 165.887 154.572 166C157.06 166 159.209 166 160.453 165.887C166.334 165.547 169.727 164.981 171.989 164.528C174.816 164.075 179.906 162.603 182.507 161.471C184.09 160.791 184.203 159.432 183.412 158.187C182.959 157.394 182.168 156.828 181.376 156.149C177.418 152.638 173.346 149.355 169.501 145.844C163.733 140.636 158.191 135.201 152.197 130.331C147.108 126.142 141.566 122.632 136.138 118.895C134.328 117.649 132.405 116.63 130.596 115.498C129.578 114.932 128.56 114.252 127.429 113.686C122.905 111.422 118.269 109.27 113.745 106.892C111.03 105.533 106.959 104.061 95.6494 99.4188C92.5958 98.1732 65.3397 86.8499 63.8695 86.0573C59.1195 83.4529 54.8218 80.3956 51.3159 76.3192C49.9587 74.734 49.2801 70.0914 49.9587 67.94C51.2028 63.8636 52.5599 63.0709 56.0659 60.8063C61.1552 57.5225 63.8695 53.6726 65.0004 48.4638C65.1135 48.1241 65.3397 46.8786 64.2088 47.3315C62.6254 48.0109 58.4409 47.6712 56.9706 46.8786C56.6314 46.7653 57.0837 46.0859 58.2147 45.1801C58.8933 44.6139 59.5718 44.161 60.2504 43.5948C63.8695 41.1037 67.7147 38.9522 71.8993 37.4802C77.7802 35.442 83.8874 33.6303 89.9946 32.7244C94.5184 32.045 99.2684 32.7244 103.905 33.1773C107.864 33.6303 111.822 34.5362 115.78 35.3288C116.346 35.442 116.911 35.6685 117.364 36.0082C120.191 37.7067 122.905 39.5184 125.846 41.1037C128.334 42.4625 130.935 43.5948 133.536 44.7271C134.554 45.1801 135.459 45.0668 135.911 44.6139C137.042 43.4816 133.65 38.9522 134.894 34.3097C135.12 33.6303 135.12 33.1774 135.572 33.2906C149.257 36.4611 149.37 41.2169 166.673 44.5007C172.554 45.633 177.983 45.0668 183.185 45.0668C186.578 45.0668 187.37 43.3684 185.674 40.4243C184.203 38.1596 182.507 36.1214 180.924 33.8568C179.227 31.4789 179.793 29.7803 182.054 28.0818C185.56 25.251 189.179 22.6467 192.233 19.4761C196.983 14.4939 201.959 10.191 208.745 8.37926C209.311 8.26603 210.102 7.36016 209.989 7.13369C209.197 6.56752 208.632 5.88813 208.066 5.54843Z"
						fill="currentColor" fill-opacity="0.1" />
				</svg>
			</a>
			<a href="<?php the_field('category_blog_link'); ?>" class="category-item">
				<h2 class="category-title"><?php the_field('category_blog_title'); ?></h2>
				<p class="category-descr"><?php the_field('category_blog_descr'); ?></p>
				<svg width="600" height="220" viewBox="0 0 600 220" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_208_34)">
						<path
							d="M597.95 110.1C597.45 106.5 595.151 103.5 594.152 100.1C593.552 97.3 594.751 94.6 594.751 91.8C593.252 90.3 591.753 89 590.454 87.8C590.254 87.6 590.154 87 590.154 86.8C590.754 84.8 591.453 82.8 592.453 80.8C587.756 79.1 582.758 79.4 577.861 79.1C575.962 79.1 576.062 75.6 575.463 74.2C575.763 74.2 576.662 74.3 577.062 74.3C578.761 70.2 579.46 66.6 579.46 63.5C579.46 53.1 571.265 48 562.77 48C556.574 48 550.177 50.7 546.68 56.1C538.085 56.9 529.689 57.6 524.093 61.1C523.493 61.4 523.693 62.2 524.892 62.6C530.889 64.5 536.985 65.8 543.282 66.6C543.182 66.9 543.082 67.1 543.082 67.4C543.082 67.7 543.282 67.9 543.082 68.5C542.582 70.1 541.483 71.8 541.083 73.3C540.983 73.5 541.183 73.8 541.283 73.9C541.682 74.1 542.182 74.2 542.382 74.4C544.281 76.1 542.182 78.8 542.482 80.7C541.782 80.9 540.983 81.2 540.183 81.4C536.885 82.3 532.588 83.1 529.689 83.3C527.191 83.6 525.792 86.6 523.393 87.2C519.495 87.2 516.997 90.8 514.298 93C511.5 95.5 507.402 95.8 506.003 99.6C503.705 99.2 501.906 98.9 500.506 98.4C500.007 98.3 499.607 98.6 499.507 98.8C499.407 99.2 499.207 99.4 499.007 99.9C498.608 99.7 498.308 99.4 497.908 99.2C484.816 90.9 471.324 82.8 457.931 75.1C443.24 67.1 418.854 52.2 376.179 35.1C345.897 23 308.718 11.1 269.941 5.6C251.752 3 241.658 2.3 236.761 3C241.858 3.2 255.45 4.8 268.042 7.2C292.828 12 330.806 20.3 375.28 38.2C413.457 53.6 455.533 78 455.733 78.1C468.725 85.6 481.618 93.3 494.31 101.3C494.31 102.1 494.01 103.2 494.61 104.1C495.709 104.7 496.809 104.9 497.908 105.2C497.908 106 497.908 106.9 498.208 107.4C499.007 108.5 500.407 108.8 501.506 109.3C501.806 109.8 501.806 110.4 501.806 111.2C500.806 110.6 499.707 110.3 498.508 110.3C496.609 110.3 494.81 111.1 493.71 112.4C493.611 112.4 493.511 112.3 493.511 112.3C442.241 73.9 385.274 45 324.309 26.3C250.952 3.8 208.177 2 159.905 2C110.934 2 66.1602 9.1 33.979 21.9C18.8878 27.9 6.79486 35 -2 43.1C-1.30041 43.2 -0.500885 43.4 0.0987649 43.7C8.69375 36.1 20.187 29.4 34.5786 23.7C66.5599 11 111.034 4 159.805 4C207.977 4 250.552 5.8 324.109 28.3C378.977 45.1 430.547 70.2 477.62 103.1C482.117 106.2 486.615 109.5 491.012 112.7C490.712 113.3 491.812 114.7 492.311 116.2C492.311 116.5 492.211 116.8 492.211 117V117.1C492.211 119 493.111 120.8 494.51 121.9C495.709 122.9 497.109 123.5 498.808 123.5C499.607 123.5 500.407 123.4 501.106 123.1C502.206 123.5 503.205 124.4 504.304 125.1C504.504 125.2 505.004 125.2 505.204 125.1C507.402 123.7 510.201 123.6 512.499 122.4C513.599 120.5 514.199 118.5 515.498 116.9C516.097 117.7 516.297 118.8 516.597 119.9C516.597 121.8 518.496 123.2 519.395 125.1C519.695 126.5 518.596 128.1 519.395 129.5C520.795 131.4 521.894 133.6 522.993 135.8C525.792 139.1 530.389 139.9 532.588 143.8C533.987 146 536.186 147.7 537.285 150.2C536.486 154.9 536.985 159.6 534.487 164C533.387 165.9 531.888 167.6 531.089 169.5C530.289 172 530.289 174.8 529.49 177.5C528.89 180.3 528.09 183 527.291 185.8C526.491 188.3 524.792 190.2 523.993 192.7C523.693 193.9 523.493 195.1 523.293 196.3C519.5 225.5 515 222.5 530 222.5C551 222.5 548.5 222.5 556.974 198C557.073 197.7 557.173 197.4 557.373 197C558.173 195.1 560.372 194 561.771 192.6C564.269 190.9 566.168 188.5 567.567 186C570.066 187.4 572.464 188.8 575.563 188.8C578.861 188.7 583.358 188.7 585.157 186C587.156 183.1 587.056 179.9 588.755 177.2C590.954 173.9 591.553 170 592.353 166.7C588.455 164.2 584.358 162.6 579.96 161.7C581.059 160.4 583.758 155.4 584.058 151.8C584.358 148.5 584.058 145.4 584.358 142.1C585.157 139.3 586.057 136.8 586.556 134.1C588.255 128.9 590.454 124.6 591.254 119.1C591.853 116.1 592.353 112.9 591.753 109.8C593.352 110.5 595.051 111.2 596.85 111.4C597.75 111.5 598.149 111 597.95 110.1ZM540.683 118.1C540.983 120 540.683 122.2 540.683 124.2C538.784 121.4 535.986 119.2 532.987 117.9C528.59 114 523.393 110.7 518.896 106.6C524.193 104.7 528.89 101.5 534.387 101C536.485 102.1 539.584 103.6 543.182 104.1C542.182 106.4 539.884 115.6 540.683 118.1Z"
							fill="currentColor" fill-opacity="0.1" />
					</g>
					<defs>
						<clipPath id="clip0_208_34">
							<rect width="600" height="220" fill="currentColor" />
						</clipPath>
					</defs>
				</svg>
			</a>
		</div>

		<div class="section-content">
			<h1 class="section-title"><?php the_field('front_info_title'); ?></h1>
			<?php the_field('front_info_content'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>