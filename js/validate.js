$(document).ready(function () {
  function validateField(input) {
    let field = $(input);
    let value = field.val().trim();

    let errorSpan = $("#" + field.attr("name") + "Error");
    let validationType = field.data("validation") || "";
    let minLength = field.data("min") || 0;
    let maxLength = field.data("max") || 9999;
    let filesize = field.data("filesize") || 0;
    let minItems = field.data("min-items") || 0;
    let maxItems = field.data("max-items") || 9999;
    let fileTypes = field.data("filetypes") || "";

    let errorMessage = "";

    if (validationType != "") {
      if (validationType.includes("required") && value === "") {
        errorMessage = "This field is required.";
      }

      if (!errorMessage && validationType.includes("email")) {
        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(value)) {
          errorMessage = "Please enter a valid email address.";
        }
      }
      if (!errorMessage && validationType.includes("strongPassword")) {
        let pwdRegex =
          /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,25}$/;
        if (!pwdRegex.test(value)) {
          errorMessage =
            "Password must be at least 8 characters, include uppercase, lowercase, number, and special character.";
        }
      }
      if (!errorMessage && validationType.includes("confirmPassword")) {
        let confirmPassword = value;
        let password = $("#" + field.data("password-id"))
          .val()
          .trim();
        if (confirmPassword !== password) {
          errorMessage = "Passwords do not match.";
        }
      }
      if (
        !errorMessage &&
        validationType.includes("terms") &&
        !field.is(":checked")
      ) {
        
        errorMessage = "You must agree to the Terms & Conditions.";
      }

      if (
        !errorMessage &&
        validationType.includes("alpha") &&
        !/^[A-Za-z\s]+$/.test(value)
      ) {
        errorMessage = "Only letters are allowed.";
      }

      if (
        !errorMessage &&
        validationType.includes("numeric") &&
        !/^[0-9]+$/.test(value)
      ) {
        errorMessage = "Only numbers are allowed.";
      }

      if (
        !errorMessage &&
        validationType.includes("min") &&
        value.length < minLength
      ) {
        errorMessage = `Must be at least ${minLength} characters.`;
      }

      if (
        !errorMessage &&
        validationType.includes("max") &&
        value.length > maxLength
      ) {
        errorMessage = `Must be less than ${maxLength} characters.`;
      }

      if (
        !errorMessage &&
        field.attr("type") === "checkbox" &&
        (validationType.includes("min-items") ||
          validationType.includes("max-items"))
      ) {
        let groupName = field.attr("name");
        let checkedCount = $('input[name="' + groupName + '"]:checked').length;

        if (validationType.includes("min-items") && checkedCount < minItems) {
          errorMessage = `Please select at least ${minItems} option(s).`;
        } else if (
          validationType.includes("max-items") &&
          checkedCount > maxItems
        ) {
          errorMessage = `You can only select up to ${maxItems} option(s).`;
        }
      }

      if (!errorMessage && validationType.includes("file")) {
        if (field[0].files.length > 0) {
          let file = field[0].files[0];
          let fileName = file.name;
          let fileSizeKB = file.size / 1024;
          let fileExtension = fileName.split(".").pop().toLowerCase();

          if (fileTypes && !fileTypes.split(",").includes(fileExtension)) {
            errorMessage = "Only JPG, JPEG, or PNG files are allowed.";
          } else if (
            validationType.includes("filesize") &&
            fileSizeKB > filesize
          ) {
            errorMessage = `File size must be less than ${filesize} KB.`;
          }
        } else {
          errorMessage = "Please upload a file.";
        }
      }

      if (
        !errorMessage &&
        field.is("select") &&
        validationType.includes("required") &&
        (value === "" || field.find("option:selected").index() === 0)
      ) {
        errorMessage = "Please select an option.";
      }

      let target =
        field.attr("type") === "checkbox"
          ? $('input[name="' + field.attr("name") + '"]')
          : field;

      // Show/hide error
      if (errorMessage) {
        errorSpan.text(errorMessage).show();
        target.addClass("is-invalid").removeClass("is-valid");
      } else {
        errorSpan.text("").hide();
        target.removeClass("is-invalid").addClass("is-valid");
      }
    }
  }

  $("input, textarea, select").on("input change", function () {
    validateField(this);
  });

  $("form").on("submit", function (e) {
    let isValid = true;
    $(this)
      .find("input, textarea, select")
      .each(function () {
        validateField(this);
        let errorSpan = $("#" + $(this).attr("name") + "Error");
        if (errorSpan.text().trim() !== "") {
          isValid = false;
        }
      });

    if (!isValid) {
      e.preventDefault();
    }
  });

//     // ===== ORDERS PAGE FILTER =====
//   const filterBtns = document.querySelectorAll('.order-filter-btn');
//   const orderCards = document.querySelectorAll('.order-card');
//   const noOrdersBox = document.getElementById('noOrdersBox');

//   filterBtns.forEach(function (btn) {
//     btn.addEventListener('click', function () {

//       filterBtns.forEach(b => b.classList.remove('active'));
//       this.classList.add('active');

//       const status = this.dataset.status;
//       let visibleCount = 0;

//       orderCards.forEach(function (card) {
//         if (status === 'all' || card.dataset.status === status) {
//           card.style.display = 'block';
//           visibleCount++;
//         } else {
//           card.style.display = 'none';
//         }
//       });

//       if (noOrdersBox) {
//         noOrdersBox.style.display = visibleCount === 0 ? 'block' : 'none';
//       }
//     });
//   });
//   /*payment javascript*/
//    const tabButtons = document.querySelectorAll('.pay-tab-btn');
//     const panels = document.querySelectorAll('.pay-panel');

//     tabButtons.forEach(function (btn) {
//         btn.addEventListener('click', function () {

//             tabButtons.forEach(b => b.classList.remove('active'));
//             panels.forEach(p => p.classList.remove('active'));

//             this.classList.add('active');
//             document.getElementById('panel-' + this.dataset.tab).classList.add('active');
//         });
//     });

//     const upiOptions = document.querySelectorAll('.upi-app-option');
//     upiOptions.forEach(function (opt) {
//         opt.addEventListener('click', function () {
//             upiOptions.forEach(o => o.classList.remove('selected'));
//             this.classList.add('selected');
//         });
//     });

//     document.getElementById('payNowBtn').addEventListener('click', function () {

//         const overlay = document.getElementById('processingOverlay');
//         overlay.classList.add('show');

//         setTimeout(function () {
//             window.location.href = 'order_success.php';
//         }, 2200);
//     });
//     /*product_details javascript*/
//      function changeMainImage(src, element) {
//         document.getElementById('currentMainImg').src = src;
//         document.querySelectorAll('.pd-thumb').forEach(t => t.classList.remove('is-active'));
//         element.classList.add('is-active');
//     }

//     function switchTab(tabName) {
//         document.querySelectorAll('.pd-tab-btn').forEach(btn => {
//             btn.classList.toggle('is-active', btn.dataset.tab === tabName);
//         });
//         document.querySelectorAll('.pd-tab-panel').forEach(panel => {
//             panel.classList.remove('is-active');
//         });
//         document.getElementById('pd' + tabName.charAt(0).toUpperCase() + tabName.slice(1) + 'Panel').classList.add('is-active');
//     }

//     const starIcons = document.querySelectorAll('#starRatingInput i');
//     const selectedRatingInput = document.getElementById('selectedRating');

//     starIcons.forEach(function (star) {
//         star.addEventListener('click', function () {
//             const value = parseInt(this.dataset.value);
//             selectedRatingInput.value = value;
//             starIcons.forEach(s => s.classList.toggle('is-active', parseInt(s.dataset.value) <= value));
//         });
//     });

//     document.getElementById('reviewForm').addEventListener('submit', function (event) {
//         event.preventDefault();

//         const rating = parseInt(selectedRatingInput.value);
//         const name = document.getElementById('reviewerName').value.trim();
//         const text = document.getElementById('reviewText').value.trim();

//         if (rating === 0) {
//             alert('Please select a star rating.');
//             return;
//         }

//         if (name === '' || text === '') {
//             alert('Please fill in your name and review.');
//             return;
//         }

//         const today = new Date();
//         const dateStr = today.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' });

//         let starsHtml = '';
//         for (let i = 1; i <= 5; i++) {
//             starsHtml += i <= rating ? '<i class="bi bi-star-fill"></i>' : '<i class="bi bi-star"></i>';
//         }

//         const reviewCard = document.createElement('div');
//         reviewCard.className = 'pd-review-card';
//         reviewCard.innerHTML = `
//             <div class="pd-review-head">
//                 <div class="d-flex align-items-center">
//                     <span class="pd-avatar">${name.charAt(0).toUpperCase()}</span>
//                     <div>
//                         <div class="fw-semibold small text-dark">
//                             ${name}
//                             <span class="pd-verified ms-1"><i class="bi bi-patch-check-fill"></i> Just Now</span>
//                         </div>
//                         <div class="pd-review-stars">${starsHtml}</div>
//                     </div>
//                 </div>
//                 <span class="text-muted small">${dateStr}</span>
//             </div>
//             <p class="pd-review-text">${text}</p>
//         `;

//         const reviewList = document.getElementById('reviewList');
//         reviewList.insertBefore(reviewCard, reviewList.firstChild);

//         this.reset();
//         selectedRatingInput.value = 0;
//         starIcons.forEach(s => s.classList.remove('is-active'));

//         alert('Thank you! Your review has been submitted (demo only, not saved to database).');
//     });
//     /*product javascript*/
//      const searchInput = document.getElementById('productSearchInput');
//     const categoryChips = document.querySelectorAll('#categoryChipGroup .pc-chip');
//     const conditionChips = document.querySelectorAll('#conditionChipGroup .pc-chip');
//     const priceRangeInput = document.getElementById('priceRangeInput');
//     const priceRangeLabel = document.getElementById('priceRangeLabel');
//     const sortSelect = document.getElementById('sortSelect');
//     const resetFiltersBtn = document.getElementById('resetFiltersBtn');

//     const productGrid = document.getElementById('productGrid');
//     const productItems = Array.from(document.querySelectorAll('.product-item'));
//     const noResultsBox = document.getElementById('noResultsBox');
//     const visibleCountText = document.getElementById('visibleCountText');

//     let activeCategory = 'All Categories';
//     let activeCondition = 'All Conditions';

//     function setActiveChip(chipList, chip, valueSetter) {
//         chipList.forEach(c => c.classList.remove('is-active'));
//         chip.classList.add('is-active');
//         valueSetter(chip.dataset.value);
//         applyFilters();
//     }

//     categoryChips.forEach(chip => {
//         chip.addEventListener('click', () => setActiveChip(categoryChips, chip, v => activeCategory = v));
//     });

//     conditionChips.forEach(chip => {
//         chip.addEventListener('click', () => setActiveChip(conditionChips, chip, v => activeCondition = v));
//     });

//     function applyFilters() {

//         const searchTerm = searchInput.value.trim().toLowerCase();
//         const maxPrice = parseInt(priceRangeInput.value);
//         let visibleCount = 0;

//         productItems.forEach(function (item) {

//             const name = item.dataset.name;
//             const specs = item.dataset.specs;
//             const category = item.dataset.category;
//             const condition = item.dataset.condition;
//             const price = parseInt(item.dataset.price);

//             const matchesSearch = searchTerm === '' || name.includes(searchTerm) || specs.includes(searchTerm) || category.toLowerCase().includes(searchTerm);
//             const matchesCategory = activeCategory === 'All Categories' || category === activeCategory;
//             const matchesCondition = activeCondition === 'All Conditions' || condition === activeCondition;
//             const matchesPrice = price <= maxPrice;

//             if (matchesSearch && matchesCategory && matchesCondition && matchesPrice) {
//                 item.style.display = '';
//                 visibleCount++;
//             } else {
//                 item.style.display = 'none';
//             }
//         });

//         visibleCountText.textContent = visibleCount;
//         noResultsBox.style.display = visibleCount === 0 ? 'block' : 'none';
//         productGrid.style.display = visibleCount === 0 ? 'none' : 'grid';
//     }

//     function applySort() {

//         const sortValue = sortSelect.value;
//         const sortedItems = productItems.slice();

//         if (sortValue === 'low') {
//             sortedItems.sort((a, b) => parseInt(a.dataset.price) - parseInt(b.dataset.price));
//         } else if (sortValue === 'high') {
//             sortedItems.sort((a, b) => parseInt(b.dataset.price) - parseInt(a.dataset.price));
//         }

//         sortedItems.forEach(item => productGrid.appendChild(item));
//     }

//     searchInput.addEventListener('input', applyFilters);

//     priceRangeInput.addEventListener('input', function () {
//         priceRangeLabel.textContent = '₹' + parseInt(this.value).toLocaleString('en-IN');
//         applyFilters();
//     });

//     sortSelect.addEventListener('change', function () {
//         applySort();
//         applyFilters();
//     });

//     resetFiltersBtn.addEventListener('click', function () {

//         searchInput.value = '';

//         categoryChips.forEach(c => c.classList.remove('is-active'));
//         categoryChips[0].classList.add('is-active');
//         activeCategory = 'All Categories';

//         conditionChips.forEach(c => c.classList.remove('is-active'));
//         conditionChips[0].classList.add('is-active');
//         activeCondition = 'All Conditions';

//         priceRangeInput.value = 65000;
//         priceRangeLabel.textContent = '₹65,000';
//         sortSelect.value = 'featured';

//         applySort();
//         applyFilters();
//     });
// });

