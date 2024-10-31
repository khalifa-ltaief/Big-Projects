fetch("dashboardHeader.html")
  .then((response) => response.text())
  .then((data) => {
    document.getElementById("headerDashboard").innerHTML = data;

    const accountItem = document.querySelector('.account');
    const accountItemDiv = document.querySelector('.connexion');

    if (accountItem && accountItemDiv) {
      accountItem.addEventListener('click', () => {
     
        accountItemDiv.style.display = 
          accountItemDiv.style.display === 'flex' ? 'none' : 'flex';
        console.log('Toggled account menu');
      });

  
      accountItemDiv.addEventListener('mouseleave', () => {
        accountItemDiv.style.display = 'none';
      });

      document.addEventListener('click', (event) => {
        if (!accountItem.contains(event.target) && !accountItemDiv.contains(event.target)) {
          accountItemDiv.style.display = 'none';
        }
      });
    }
  })
  .catch((error) => console.error('Error fetching dashboard header:', error));
