document.addEventListener("DOMContentLoaded", function () {
  fetch("header.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("header").innerHTML = data;

      // Move the event listener setup code here
      setupEventListeners(); // Call a function to set up event listeners
    });
    function setupEventListeners() {

      const workoutItem = document.querySelector(".workout");
      const workoutItemsDiv = document.querySelector(".workout-items");
      const programItem = document.querySelector(".programs");
      const programItemDiv = document.querySelector(".programs-items");
      const healthItem = document.querySelector(".health");
      const healthItemDiv = document.querySelector(".health-items");
      const communityItem = document.querySelector(".community");
      const communityItemDiv = document.querySelector(".community-items");
      const aboutItem = document.querySelector(".about");
      const aboutItemDiv = document.querySelector(".about-items");
      const accountItem = document.querySelector(".account");
      const accountItemDiv = document.querySelector(".connexion");
      const openMenu = document.querySelector(".menu");
      const closeMenu = document.querySelector(".close");
      const menu = document.querySelector(".responsive");
      if (workoutItem && workoutItemsDiv) {
        workoutItem.addEventListener("mouseenter", () => {
          workoutItemsDiv.style.display = "flex";
        });
        workoutItemsDiv.addEventListener("mouseenter", () => {
          workoutItemsDiv.style.display = "flex";
        });

        workoutItem.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !workoutItemsDiv.matches(":hover") &&
              !workoutItem.matches(":hover")
            ) {
              workoutItemsDiv.style.display = "none";
            }
          }, 150);
        });

        workoutItemsDiv.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !workoutItemsDiv.matches(":hover") &&
              !workoutItem.matches(":hover")
            ) {
              workoutItemsDiv.style.display = "none";
            }
          }, 150);
        });
      }
      if (programItem && programItemDiv) {
        programItem.addEventListener("mouseenter", () => {
          programItemDiv.style.display = "flex";
        });
        programItemDiv.addEventListener("mouseenter", () => {
          programItemDiv.style.display = "flex";
        });
        programItem.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !programItemDiv.matches(":hover") &&
              !programItem.matches(":hover")
            ) {
              programItemDiv.style.display = "none";
            }
          }, 150);
        });
        programItemDiv.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !programItemDiv.matches(":hover") &&
              !programItem.matches(":hover")
            ) {
              programItemDiv.style.display = "none";
            }
          }, 150);
        });
      }
      if (healthItem && healthItemDiv) {
        healthItem.addEventListener("mouseenter", () => {
          healthItemDiv.style.display = "flex";
        });
        healthItemDiv.addEventListener("mouseenter", () => {
          healthItemDiv.style.display = "flex";
        });
        healthItem.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !healthItemDiv.matches(":hover") &&
              !healthItem.matches(":hover")
            ) {
              healthItemDiv.style.display = "none";
            }
          }, 150);
        });
        healthItemDiv.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !healthItemDiv.matches(":hover") &&
              !healthItem.matches(":hover")
            ) {
              healthItemDiv.style.display = "none";
            }
          }, 150);
        });
      }
      if (communityItem && communityItemDiv) {
        communityItem.addEventListener("mouseenter", () => {
          communityItemDiv.style.display = "flex";
        });
        communityItemDiv.addEventListener("mouseenter", () => {
          communityItemDiv.style.display = "flex";
        });
        communityItem.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !communityItemDiv.matches(":hover") &&
              !communityItem.matches(":hover")
            ) {
              communityItemDiv.style.display = "none";
            }
          }, 150);
        });
        communityItemDiv.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !communityItemDiv.matches(":hover") &&
              !communityItem.matches(":hover")
            ) {
              communityItemDiv.style.display = "none";
            }
          }, 150);
        });
      }
      if (aboutItem && aboutItemDiv) {
        aboutItem.addEventListener("mouseenter", () => {
          aboutItemDiv.style.display = "flex";
        });
        aboutItemDiv.addEventListener("mouseenter", () => {
          aboutItemDiv.style.display = "flex";
        });
        aboutItem.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !aboutItemDiv.matches(":hover") &&
              !aboutItem.matches(":hover")
            ) {
              aboutItemDiv.style.display = "none";
            }
          }, 150);
        });
        aboutItemDiv.addEventListener("mouseleave", () => {
          setTimeout(() => {
            if (
              !aboutItemDiv.matches(":hover") &&
              !aboutItem.matches(":hover")
            ) {
              aboutItemDiv.style.display = "none";
            }
          }, 150);
        });
      }
      if (accountItem && accountItemDiv) {
        accountItem.addEventListener("click", () => {
          if (accountItemDiv.style.display === "flex") {
            accountItemDiv.style.display = "none";
          } else {
            accountItemDiv.style.display = "flex";
            console.log("yyy");
          }
        });
        accountItemDiv.addEventListener("mouseleave", () => {
          accountItemDiv.style.display = "none";
        });

        document.addEventListener("click", (event) => {
          if (
            !accountItem.contains(event.target) &&
            !accountItemDiv.contains(event.target)
          ) {
            accountItemDiv.style.display = "none";
          }
        });
      }
      openMenu.addEventListener("click", () => {
        menu.style.display = "flex";
      });
      closeMenu.addEventListener("click", () => {
        menu.style.display = "none";
      });
    }
  fetch("footer.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("footer").innerHTML = data;
    });
});
const loginAvatar = document.querySelector(".right--box")
const logoutBox = document.querySelector(".logout")
loginAvatar.onclick = function(){
  if(logoutBox.style.display === "none"){
    logoutBox.style.display = "flex"
  }else {
    logoutBox.style.display = "none"
  }
}