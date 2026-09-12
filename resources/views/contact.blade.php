@extends('layouts.app')

@section('title', 'Contact | Flashline EMS')

@section('content')

<!-- ══════════ CONTACT ══════════ -->

<section class="section" id="contact">

  <div class="section-head reveal">
    <span class="section-no">07</span>

    <h2>Have a board to build?</h2>

    <p>
      Tell us about your project — we'll come back with a DFM review and a quote.
      You can email Gerbers and BOM once we reply.
    </p>
  </div>

  <div class="contact-grid">

    <!-- CONTACT FORM -->
    <form
      class="contact-form reveal"
      id="contactForm"
      action="https://formsubmit.co/sales@flashlineems.com"
      method="POST"
      enctype="multipart/form-data"
      novalidate
    >

      <input
        type="hidden"
        name="_subject"
        value="Business enquiry — flashlineems.com"
      >

      <input
        type="text"
        name="_honey"
        class="hp"
        tabindex="-1"
        autocomplete="off"
        aria-hidden="true"
      >


      <!-- NAME + COMPANY -->
      <div class="ff-row">

        <label class="ff">
          <span>Name *</span>

          <input
            type="text"
            name="name"
            required
            autocomplete="name"
            placeholder="Your name"
          >
        </label>


        <label class="ff">
          <span>Company *</span>

          <input
            type="text"
            name="company"
            required
            autocomplete="organization"
            placeholder="Company name"
          >
        </label>

      </div>


      <!-- EMAIL + PHONE -->
      <div class="ff-row">

        <label class="ff">
          <span>Business email *</span>

          <input
            type="email"
            name="email"
            required
            autocomplete="email"
            placeholder="you@company.com"
          >
        </label>


        <label class="ff">
          <span>Phone</span>

          <input
            type="tel"
            name="phone"
            autocomplete="tel"
            placeholder="+91 …"
          >
        </label>

      </div>


      <!-- ENQUIRY TYPE + ESTIMATED VOLUME -->
      <div class="ff-row">

        <label class="ff">
          <span>Enquiry type *</span>

          <select name="enquiry_type" required>
            <option value="" disabled selected>Select…</option>

            <option>PCB Assembly</option>
            <option>PCB Fabrication</option>
            <option>Box Build / Turnkey</option>
            <option>Engineering Design / DFM</option>
            <option>Factory tour / Meeting</option>
            <option>Other</option>
          </select>
        </label>


        <label class="ff">
          <span>Estimated volume</span>

          <select name="estimated_volume">
            <option value="" selected>Not sure yet</option>

            <option>Prototype (&lt; 50)</option>
            <option>50 – 1,000</option>
            <option>1,000 – 10,000</option>
            <option>10,000+</option>
          </select>
        </label>

      </div>


      <!-- PROJECT DETAILS -->
      <label class="ff">

        <span>Project details *</span>

        <textarea
          name="message"
          rows="5"
          required
          placeholder="Board type, layer count, quantities, timeline — whatever you have."
        ></textarea>

      </label>


      <!-- DOCUMENT UPLOAD -->
      <div class="ff file-upload">

        <span>Upload documents</span>

        <input
          type="file"
          id="documentUpload"
          name="_attachment"
          multiple
          accept=".pdf,.zip,.rar,.xls,.xlsx,.csv,.doc,.docx,.png,.jpg,.jpeg"
        >

        <div id="selectedFiles"></div>

        <small>
          Upload Gerber files, BOM, drawings or other project documents.
          Maximum file size: 1 GB per file.
        </small>

      </div>


      <!-- SUBMIT BUTTON -->
      <button
        type="submit"
        class="btn btn-solid"
        id="contactSubmit"
      >
        Send Enquiry
      </button>


      <!-- FORM STATUS -->
      <p
        class="form-status"
        id="formStatus"
        role="status"
      ></p>

    </form>


    <!-- CONTACT INFORMATION -->
    <aside class="contact-aside reveal">

      <h3>Direct lines</h3>

      <a
        class="contact-link"
        href="mailto:sales@flashlineems.com"
      >
        sales@flashlineems.com
      </a>


      <a
        class="contact-link"
        href="tel:+918121020371"
      >
        +91 81210 20371
      </a>


      <h3>Visit us</h3>

      <p class="addr">
        Flashline EMS Private Limited<br>
        Sy No 78 &amp; S59, Plot S58–S59, E-City,<br>
        Raviryala, Maheswaram Industrial Area,<br>
        Rangareddy, Telangana — 501359, India
      </p>


      <p class="aside-links">

        <a href="{{ route('tour') }}">
          Take the 3D virtual tour →
        </a>

        <a href="{{ url('/') }}#event">
          Meet us at electronica India 2026 →
        </a>

      </p>

    </aside>

  </div>

</section>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const fileInput = document.getElementById('documentUpload');
    const selectedFiles = document.getElementById('selectedFiles');
    const contactForm = document.getElementById('contactForm');

    let filesArray = [];

    /* 1 GB in bytes */
    const MAX_FILE_SIZE = 1024 * 1024 * 1024;


    /*
     * FILE SELECTION
     */
    fileInput.addEventListener('change', function () {

        const newFiles = Array.from(fileInput.files);

        newFiles.forEach(function (file) {

            /*
             * Check file size
             */
            if (file.size > MAX_FILE_SIZE) {

                alert(
                    '"' +
                    file.name +
                    '" is larger than 1 GB and cannot be uploaded.'
                );

                return;
            }


            /*
             * Check duplicate files
             */
            const duplicate = filesArray.some(function (existingFile) {

                return (
                    existingFile.name === file.name &&
                    existingFile.size === file.size &&
                    existingFile.lastModified === file.lastModified
                );

            });


            /*
             * Add file if it is not already selected
             */
            if (!duplicate) {

                filesArray.push(file);

            }

        });


        displayFiles();


        /*
         * Clear the input so the user can
         * select more files again.
         */
        fileInput.value = '';

    });


    /*
     * DISPLAY SELECTED FILES
     */
    function displayFiles() {

        selectedFiles.innerHTML = '';


        filesArray.forEach(function (file, index) {

            const fileRow = document.createElement('div');

            fileRow.className = 'selected-file';


            const fileName = document.createElement('span');

            fileName.className = 'file-name';

            fileName.textContent = file.name;


            const removeButton = document.createElement('button');

            removeButton.type = 'button';

            removeButton.className = 'remove-file';

            removeButton.setAttribute(
                'data-index',
                index
            );

            removeButton.textContent = 'Remove';


            fileRow.appendChild(fileName);

            fileRow.appendChild(removeButton);


            selectedFiles.appendChild(fileRow);

        });

    }


    /*
     * REMOVE INDIVIDUAL FILE
     */
    selectedFiles.addEventListener('click', function (event) {

        if (
            !event.target.classList.contains('remove-file')
        ) {

            return;

        }


        const index = parseInt(
            event.target.getAttribute('data-index'),
            10
        );


        filesArray.splice(index, 1);


        displayFiles();

    });


    /*
     * ADD FILES TO THE REAL INPUT BEFORE SUBMITTING
     */
    contactForm.addEventListener('submit', function (event) {

        /*
         * Create a new FileList
         */
        const dataTransfer = new DataTransfer();


        filesArray.forEach(function (file) {

            dataTransfer.items.add(file);

        });


        /*
         * Put the selected files into the
         * actual file input.
         */
        fileInput.files = dataTransfer.files;

    });

});

</script>

@endsection