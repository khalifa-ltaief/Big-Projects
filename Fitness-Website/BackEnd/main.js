const icons = document.querySelector(".icons");
const searchBar = document.querySelector(".search-bar");
const searchIcon = document.querySelector(".fa-magnifying-glass");
const closeSearch = document.querySelector(".close");
const cnx = document.querySelector(".cnx");
const profile = document.querySelector(".right-side img");
const closeTab = document.querySelector(".close-tab");
const message = document.querySelector(".success-msg");
const sidebarResponsive = document.querySelector('.sidebar-responsive')
const closeResponsive = document.querySelector('.close-menu-responsive')
const workoutTab = document.querySelector('aside .workout-tab')
const workoutSousCateg = document.querySelector('aside .workouts-sous-categories')
const customWorkoutTab = document.querySelector('aside .custom-workouts-tab')
const customWorkoutSousCateg = document.querySelector('aside .custom-workouts-sous-categories')
const programsTab = document.querySelector('aside .programs-tab')
const programsSousCateg = document.querySelector('aside .programs-sous-categories')
const mealTab = document.querySelector('aside .meal-tab')
const mealSousCateg = document.querySelector('aside .meal-sous-categories')
const pilotTab = document.querySelector('aside .pilot-tab')
const pilotSousCateg = document.querySelector('aside .pilot-sous-categories')
const healthTab = document.querySelector('aside .health-tab')
const heamthSousCateg = document.querySelector('aside .health-sous-categories')
const recipesTab = document.querySelector('aside .recipes-tab')
const recipesSousCateg = document.querySelector('aside .recipes-sous-categories')
const wellnessTab = document.querySelector('aside .wellness-tab')
const wellnessSousCateg = document.querySelector('aside .wellness-sous-categories')
const blogTab = document.querySelector('aside .blog-tab')
const blogSousCateg = document.querySelector('aside .blog-sous-categories')










closeResponsive.onclick = function() {
    if (sidebarResponsive.style.display === "block"){
        sidebarResponsive.style.display = "none"
    }else{
        sidebarResponsive.style.display = "block"
    }
}
searchIcon.onclick = function () {
  searchBar.style.visibility = "unset";
  icons.style.display = "none";
};
closeSearch.onclick = function () {
  searchBar.style.visibility = "hidden";
  icons.style.display = "flex";
};
if (profile && cnx) {
  profile.addEventListener("click", () => {
    if (cnx.style.display === "flex") {
      cnx.style.display = "none";
    } else {
      cnx.style.display = "flex";
      console.log("yyy");
    }
  });

  document.addEventListener("click", (event) => {
    if (!profile.contains(event.target) && !cnx.contains(event.target)) {
      cnx.style.display = "none";
    }
  });
}
closeTab.onclick = function () {
  message.style.visibility = "hidden";
};

document.querySelectorAll('.link').forEach(link => {
  link.addEventListener("click", function(event) {
    event.preventDefault();
  });
});
workoutTab.onclick = function() {
  
  if (workoutSousCateg.style.display === "block"){
      workoutSousCateg.style.display = "none"
  }else{
      workoutSousCateg.style.display = "block"
  }
}
customWorkoutTab.onclick = function() {

  if (customWorkoutSousCateg.style.display === "block"){
      customWorkoutSousCateg.style.display = "none"
  }else{
      customWorkoutSousCateg.style.display = "block"
  }
  console.log("hi")
}
programsTab.onclick = function() {
  if (programsSousCateg.style.display === "block"){
      programsSousCateg.style.display = "none"
  }else{
      programsSousCateg.style.display = "block"
  }
}
pilotTab.onclick = function() {
  if (pilotSousCateg.style.display === "block"){
      pilotSousCateg.style.display = "none"
  }else{
      pilotSousCateg.style.display = "block"
  }
}
mealTab.onclick = function() {
  if (mealSousCateg.style.display === "block"){
      mealSousCateg.style.display = "none"
  }else{
      mealSousCateg.style.display = "block"
  }
}
healthTab.onclick = function() {
  if (heamthSousCateg.style.display === "block"){
      heamthSousCateg.style.display = "none"
  }else{
      heamthSousCateg.style.display = "block"
  }
}
blogTab.onclick = function() {
  if (blogSousCateg.style.display === "block"){
      blogSousCateg.style.display = "none"
  }else{
      blogSousCateg.style.display = "block"
  }
}
recipesTab.onclick = function() {
  if (recipesSousCateg.style.display === "block"){
      recipesSousCateg.style.display = "none"
  }else{
      recipesSousCateg.style.display = "block"
  }
}

//sidebar
document.addEventListener('click', function(event) {
  // Workout Tab
  if (event.target.matches('.workout-tab')) {
      const workoutSousCateg1 = document.querySelector('.workouts-sous-categories');
      workoutSousCateg1.style.display = workoutSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Custom Workout Tab
  if (event.target.matches('.custom-workouts-tab')) {
      const customWorkoutSousCateg1 = document.querySelector('.custom-workouts-sous-categories');
      customWorkoutSousCateg1.style.display = customWorkoutSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Programs Tab
  if (event.target.matches('.programs-tab')) {
      const programsSousCateg1 = document.querySelector('.programs-sous-categories');
      programsSousCateg1.style.display = programsSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Pilot Tab
  if (event.target.matches('.pilot-tab')) {
      const pilotSousCateg1 = document.querySelector('.pilot-sous-categories');
      pilotSousCateg1.style.display = pilotSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Meal Tab
  if (event.target.matches('.meal-tab')) {
      const mealSousCateg1 = document.querySelector('.meal-sous-categories');
      mealSousCateg1.style.display = mealSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Health Tab
  if (event.target.matches('.health-tab')) {
      const healthSousCateg1 = document.querySelector('.health-sous-categories');
      healthSousCateg1.style.display = healthSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Blog Tab
  if (event.target.matches('.blog-tab')) {
      const blogSousCateg1 = document.querySelector('.blog-sous-categories');
      blogSousCateg1.style.display = blogSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Recipes Tab
  if (event.target.matches('.recipes-tab')) {
      const recipesSousCateg1 = document.querySelector('.recipes-sous-categories');
      recipesSousCateg1.style.display = recipesSousCateg1.style.display === 'block' ? 'none' : 'block';
  }

  // Wellness Tab
  if (event.target.matches('.wellness-tab')) {
      const wellnessSousCateg1 = document.querySelector('.wellness-sous-categories');
      wellnessSousCateg1.style.display = wellnessSousCateg1.style.display === 'block' ? 'none' : 'block';
  }
});
