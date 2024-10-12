    // สร้าง Intersection Observer
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show'); // เพิ่มคลาส show
        }
      });
    });

    // เลือก div child ทั้งหมดและเริ่มต้น observer
    const children = document.querySelectorAll('.child');
    children.forEach(child => {
      observer.observe(child); // สังเกต div child แต่ละตัว
    });


