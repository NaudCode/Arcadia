document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.circle-button');
    buttons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const habitat = this.getAttribute('data-habitat');
        filterAnimals(habitat);
      });
    });

    const images = document.querySelectorAll('.animal-image');

    // blind .animal-info after loading
    const infoDivs = document.querySelectorAll('.animal-info');
    infoDivs.forEach(infoDiv => {
      infoDiv.style.display = 'none';
    });
    
    images.forEach(image => {
      image.addEventListener('click', function() {
        const infoDiv = this.closest('.row').querySelector('.animal-info');
        const isInfoVisible = infoDiv.style.display === 'block';
    
        if (isInfoVisible) {
          // If visible  blind 
          infoDiv.style.display = 'none';
        } else {
          // or show
          infoDiv.style.display = 'block';
        }
      });
    });

    function filterAnimals(habitat) {
      const rows = document.querySelectorAll('.animal-row');
      rows.forEach(row => {
        if (habitat) {
          if (row.getAttribute('data-habitat') === habitat) {
            row.style.display = 'flex';
          } else {
            row.style.display = 'none';
          }
        } else {
          row.style.display = 'flex';
        }
      });
    }

    // Show all
    filterAnimals();
  });

