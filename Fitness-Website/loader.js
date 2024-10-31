document.addEventListener("DOMContentLoaded", function () {
  const loginworkoutItem = document.querySelector(
    ".login-workout"
  );
  const loginworkoutItemsDiv = document.querySelector(".login-workout-items");
  const loginprogramItem = document.querySelector(".login-programs");
  const loginprogramItemDiv = document.querySelector(".login-programs-items");
  const loginhealthItem = document.querySelector(".login-health");
  const loginhealthItemDiv = document.querySelector(".login-health-items");
  const logincommunityItem = document.querySelector(".login-community");
  const logincommunityItemDiv = document.querySelector(".login-community-items");
  const loginaboutItem = document.querySelector(".login-about");
  const loginaboutItemDiv = document.querySelector(".login-about-items");
  const loginaccountBox = document.querySelector(".login-right--box");
  const loginaccountBoxDiv = document.querySelector(".login-logout");
  const loginopenMenu = document.querySelector(".login-menu");
  const logincloseMenu = document.querySelector(".login-close");

  const loginMenu = document.querySelector(".login-responsive");
  if (loginworkoutItem && loginworkoutItemsDiv) {
    loginworkoutItem.addEventListener("mouseenter", () => {
      loginworkoutItemsDiv.style.display = "flex";
    });
    loginworkoutItemsDiv.addEventListener("mouseenter", () => {
      loginworkoutItemsDiv.style.display = "flex";
    });

    loginworkoutItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginworkoutItemsDiv.matches(":hover") &&
          !loginworkoutItem.matches(":hover")
        ) {
          loginworkoutItemsDiv.style.display = "none";
        }
      }, 150);
    });

    loginworkoutItemsDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginworkoutItemsDiv.matches(":hover") &&
          !loginworkoutItem.matches(":hover")
        ) {
          loginworkoutItemsDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginprogramItem && loginprogramItemDiv) {
    loginprogramItem.addEventListener("mouseenter", () => {
      loginprogramItemDiv.style.display = "flex";
    });
    loginprogramItemDiv.addEventListener("mouseenter", () => {
      loginprogramItemDiv.style.display = "flex";
    });
    loginprogramItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginprogramItemDiv.matches(":hover") &&
          !loginprogramItem.matches(":hover")
        ) {
          loginprogramItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginprogramItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !loginprogramItemDiv.matches(":hover") &&
          !loginprogramItem.matches(":hover")
        ) {
          loginprogramItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginhealthItem && loginhealthItemDiv) {
    loginhealthItem.addEventListener("mouseenter", () => {
      loginhealthItemDiv.style.display = "flex";
    });
    loginhealthItemDiv.addEventListener("mouseenter", () => {
      loginhealthItemDiv.style.display = "flex";
    });
    loginhealthItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginhealthItemDiv.matches(":hover") && !loginhealthItem.matches(":hover")) {
          loginhealthItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginhealthItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginhealthItemDiv.matches(":hover") && !loginhealthItem.matches(":hover")) {
          loginhealthItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (logincommunityItem && logincommunityItemDiv) {
    logincommunityItem.addEventListener("mouseenter", () => {
      logincommunityItemDiv.style.display = "flex";
    });
    logincommunityItemDiv.addEventListener("mouseenter", () => {
      logincommunityItemDiv.style.display = "flex";
    });
    logincommunityItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !logincommunityItemDiv.matches(":hover") &&
          !logincommunityItem.matches(":hover")
        ) {
          logincommunityItemDiv.style.display = "none";
        }
      }, 150);
    });
    logincommunityItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (
          !logincommunityItemDiv.matches(":hover") &&
          !logincommunityItem.matches(":hover")
        ) {
          logincommunityItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginaboutItem && loginaboutItemDiv) {
    loginaboutItem.addEventListener("mouseenter", () => {
      loginaboutItemDiv.style.display = "flex";
    });
    loginaboutItemDiv.addEventListener("mouseenter", () => {
      loginaboutItemDiv.style.display = "flex";
    });
    loginaboutItem.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginaboutItemDiv.matches(":hover") && !loginaboutItem.matches(":hover")) {
          loginaboutItemDiv.style.display = "none";
        }
      }, 150);
    });
    loginaboutItemDiv.addEventListener("mouseleave", () => {
      setTimeout(() => {
        if (!loginaboutItemDiv.matches(":hover") && !loginaboutItem.matches(":hover")) {
          loginaboutItemDiv.style.display = "none";
        }
      }, 150);
    });
  }
  if (loginaccountBox && loginaccountBoxDiv) {
    loginaccountBox.addEventListener("click", () => {
      if (loginaccountBox.style.display === "flex") {
        loginaccountBoxDiv.style.display = "none";
      } else {
        loginaccountBoxDiv.style.display = "flex";
      }
    });
    loginaccountBoxDiv.addEventListener("mouseleave", () => {
      loginaccountBoxDiv.style.display = "none";
    });

    document.addEventListener("click", (event) => {
      if (
        !loginaccountBox.contains(event.target) &&
        !loginaccountBoxDiv.contains(event.target)
      ) {
        loginaccountBoxDiv.style.display = "none";
      }
    });
  }
  loginopenMenu.addEventListener("click", () => {
    loginMenu.style.display = "flex";
  });
  logincloseMenu.addEventListener("click", () => {
    loginMenu.style.display = "none";
  });
});
