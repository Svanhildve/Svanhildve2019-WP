	
	</div>
			
	
<?php wp_footer(); ?> 

	<script type="text/javascript">
		
		if (document.querySelector('body').classList.contains('single-portfolio_items')) {
  
		  document.querySelector('li.nav--projects').classList.add('current-menu-item');

		}

	</script>

	<script type="text/javascript">

		const projectsTag = document.querySelector(".nav--projects")
		const aboutTag = document.querySelector(".nav--about")

		function mouseoverStyle(element) {		
			element.style.opacity = "0.3";
		}

		function mouseoutStyle(element) {
			element.style.opacity = "1";
		}

		projectsTag.addEventListener("mouseover", function(){
			mouseoverStyle(aboutTag);
		})

		projectsTag.addEventListener("mouseout", function(){
			mouseoutStyle(aboutTag);
		})

		aboutTag.addEventListener("mouseover", function(){
			mouseoverStyle(projectsTag);
		})

		aboutTag.addEventListener("mouseout", function(){
			mouseoutStyle(projectsTag);
		})



	</script>

</body>
</html>