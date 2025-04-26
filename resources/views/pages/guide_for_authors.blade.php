<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C5k | Guide for Authors</title>
  @include('layout.header')
  <style>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    .page-container {
      line-height: 1.6;
      background-color: #f9f9f9;
    }

    .header-wrapper {
      text-align: center;
      padding: 10px 5px;
      border-bottom: 2px solid #ddd;
      background-color: #fff;
    }

    .header-wrapper h1 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
      font-family: Georgia, serif;
    }

    .content-wrapper {
      display: flex;
      margin-top: 30px;
    }

    .guidelines-container {
      flex: 1;
      max-width: 310px;
      position: sticky;
      top: 20px;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-height: 90vh;
      overflow-y: scroll;
    }

    .guidelines-container h4 {
      color: RGB(2, 114, 177);
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .guidelines-list {
      list-style: none;
      padding: 0;
    }

    .guidelines-list li {
      margin: 5px 0;
    }

    .guidelines-list li a {
      text-decoration: none;
      color: RGB(2, 114, 177);
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .guidelines-list li a:hover {
      color: #900;
    }

    .section-wrapper {
      flex: 2;
      background-color: #fff;
      padding: 10px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;
    }

    @media (max-width: 768px) {
      .content-wrapper {
        flex-direction: column;
        align-items: center;
      }

      .guidelines-container {
        position: relative;
        width: 100%;
      }

      .section-wrapper {
        width: 100%;
      }
    }
    .page-container{
      width: 1200px;
     

    }

    
  </style>
</head>
<body>
  @include('pages.page_header_nav')

  <div class="container" style="overflow: hidden; padding: 0px;">
    <!-- Header Section -->
    <div class="header-wrapper">
      <h1>{{$journal->title}}</h1>
    </div>

    <!-- Content Wrapper -->
    <div class="content-wrapper grid grid-cols-12 ">
      <!-- Guidelines Section -->
      <div class="guidelines-container col-span-4">
        <h4 class="text-primary">Author Guidelines</h4>
        <ul class="guidelines-list">
          <li><a href="#introduction">Introduction</a></li>
          <li><a href="#guide">Guide to Authors</a></li>
          <li><a href="#submission-of-the-paper">Submission of the Paper</a></li>
          <li><a href="#preparation-of-the-paper">Preparation of the Paper</a></li>
          <ul class="-pl-4">
            <li><a href="#general-information">General Information</a></li>
            <li><a href="#highlights">Highlights</a></li>
            <li><a href="#apc">Article Processing Charge (APC)</a></li>
            <li><a href="#publishing-timeline">Publishing Timeline</a></li>
            <li><a href="#units-nomenclature">Units, Nomenclature, and Mathematical Expressions</a></li>
            <li><a href="#reference-style">Reference Style</a></li>
            <li><a href="#acknowledgements">Acknowledgements</a></li>
            <li><a href="#language-editing">Language Editing Services</a></li>
          </ul>
          <li><a href="#review-process">Review Process</a></li>
          <li><a href="#open-access">Open Access</a></li>
          <li><a href="#after-acceptance">After Acceptance</a></li>
          <ul>
            <li><a href="#conflict-of-interest">Conflict of Interest</a></li>
            <li><a href="#submission-declaration">Submission Declaration and Verification</a></li>
            <li><a href="#changes-to-authorship">Changes to Authorship</a></li>
          </ul>
          <li><a href="#proofs">Proofs</a></li>
          <li><a href="#copyright-funding">Copyright and Funding</a></li>
          <ul>
            <li><a href="#post-publication-amendments">Post-Publication Amendments</a></li>
            <li><a href="#errata-corrigenda">Errata and Corrigenda</a></li>
            <li><a href="#retractions">Retractions</a></li>
          </ul>
        </ul>
      </div>

      <!-- Content Sections -->
      <div class="section-wrapper col-span-8">
        <section id="introduction">
          <h4 class="text-primary">Introduction</h4>
          <p>The <span class="text-primary">{{$journal->title}}</span> is a premier platform dedicated to advancing knowledge at the intersection of information technology (IT) and business management. The journal provides a comprehensive forum for the dissemination of groundbreaking research, cutting-edge methodologies, and critical applications that shape the evolving landscape of IT and its strategic role in business operations and decision-making. Only papers that fall within the <span class="text-primary">Aims & Scope</span> of the journal will be considered for publication.</p>
        </section>

        <section id="guide">
          <h4 class="text-primary">Guide for Authors</h4>
          <p>Publications will examine contributions in the following categories: research articles, review papers, short communications, and technical notes. Kindly ensure that you choose the suitable article category from the provided list of possibilities before submitting your work. Authors who are submitting to special issues must make sure to choose the special issue article type from the provided list.</p>
        </section>

        <section id="submission-of-the-paper">
<div class=" mt-5">
  <div class="row">
    <div class="col-12">
      <h4 class=" mb-4 text-primary">Submission of the Paper</h4>

      <p>One author has been assigned the role of corresponding author and provided with contact information:</p>
      <ul>
        <li>Email address</li>
        <li>Complete mailing address</li>
      </ul>

      <p>All essential files have been successfully uploaded:</p>
      <ul>
        <li>Document:
          <ul>
            <li>Incorporate essential keywords into the text.</li>
            <li>Include all figures with their corresponding captions.</li>
            <li>Include all tables together with their names, descriptions, and footnotes.</li>
            <li>Verify that any references to figures and tables in the text correspond to the accompanying files.</li>
            <li>Clearly specify if colour should be utilised for any printed figures.</li>
          </ul>
        </li>
        <li>Graphical Abstracts and Highlights files are included where relevant.</li>
        <li>Additional files (if relevant)</li>
      </ul>

      <p>Additional features to take into account:</p>
      <ul>
        <li>The manuscript has undergone spell checking and grammatical checking. Additionally, all references included in the Reference List have been properly cited in the text, and vice versa.</li>
        <li>Authorization has been acquired to utilise copyrighted content from external sources (including the Internet).</li>
        <li>A statement regarding competing interests is included, even if the authors do not have any competing interests to disclose.</li>
        <li>The journal policies outlined in this guide have been examined.</li>
        <li>Referee recommendations and contact information are provided in accordance with the journal's standards.</li>
      </ul>

      <p>Submission of the manuscript to this journal proceeds totally online system. Use the following guidelines to prepare your manuscript carefully. Authors are asked to submit manuscripts in MS word or PDF format electronically through the C5K Academic Publishing Hub online upload system (<a href="http://www.c5k.com/submit" target="_blank">http://www.c5k.com/submit</a>). Author will be guided stepwise through the creation and uploading of the various files. The system automatically takes source files of the submitted version of the article, which is used in the peer-review process. Please note that source files are needed for further processing after acceptance.</p>

      <p>All correspondence, including successful submission notification, request for the revision of the manuscript, final acceptance of the manuscript by the Editor's takes place by e-mail and via the author's homepage in the system.</p>

      <p>If you have any challenges with the online submission procedure, kindly reach out to us at <a href="mailto:editor_jitmbh@c5k.com">editor_jitmbh@c5k.com</a>. Upon accepting submitted papers, the system will provide the associated author with a paper ID and Password. These credentials can be readily used to monitor the status of the submitted papers, including review, revision, acceptance, payment, and publication processes. The manuscripts submitted to C5K Academic Publishing journals undergo screening using Turnitin's Cross-check similarity software to identify instances of plagiarism, other originality and duplicate checking. Papers with a high degree of similarity will be rejected without being sent for further review.</p>
    </div>
  </div>
</div>

        </section>
        <section id="preparation-of-the-paper">
            <h4 class="text-primary">Preparaton of the Paper</h4>
            
            <p>Article stucture should consisted of introduction, materials and methods, results and discussion, conclusions, references and appendices.  </p>
            
        </section>




    <!-- General Information Section -->
    <section class="mb-5" id="general-information">
        <h4 class="h4 text-primary">General Information</h4>
        <p>The manuscripts must be written in English and formatted with double columns and single line spacing. Only standard technical papers will be published for submitted papers. Manuscripts should be submitted in either Microsoft Word document or PDF file, adhering to our journal template. Failure to adhere to the journal template will result in the return of your submission. Your paper will undergo a blind peer review procedure and may undergo many modification processes before receiving acceptance notification from our journal. Authors are required to submit research articles of exceptional quality and significant originality for this aim. The study should be completed with appropriate conclusions that accurately represent the findings presented in the paper.</p>
        <p>The recommended length for the technical article is typically between 12 and 24 journal pages. Authors are recommended to carefully review the information provided in the <strong class="text-primary">Journal_Template_jitmbh.docx</strong>.</p>
    </section>

    <!-- Publishing Instructions Section -->
    <section class="mb-5">
        <h4 class="h4 text-primary">Publishing Instructions</h4>
        <ul>
            <li>Each article should have at least five keywords that will precisely highlight the main points of the research topic.</li>
            <li>The following are the recommended font and size for the writing content:</li>
        </ul>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Content</th>
                    <th>Font</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Title of the paper</td>
                    <td>Times New Roman 16 pt</td>
                </tr>
                <tr>
                    <td>Abstract (100~250 words)</td>
                    <td>Times New Roman 9 pt</td>
                </tr>
                <tr>
                    <td>First heading</td>
                    <td>Times New Roman 12 pt bold</td>
                </tr>
                <tr>
                    <td>Second heading</td>
                    <td>Times New Roman 10 pt bold</td>
                </tr>
                <tr>
                    <td>Third heading</td>
                    <td>Times New Roman 10 pt bold and italic</td>
                </tr>
                <tr>
                    <td>Content of the body</td>
                    <td>Times New Roman 10 pt</td>
                </tr>
                <tr>
                    <td>Footnote (personal title and email address of the corresponding author)</td>
                    <td>Times New Roman 9 pt</td>
                </tr>
                <tr>
                    <td>Table and Figure title and content</td>
                    <td>Times New Roman 9 pt</td>
                </tr>
            </tbody>
        </table>

        <ul>
            <li>Figures should be properly located in the text as an editable image file (.jpg) with captions on the lower cell. All of the original figures and tables are required to be placed at suitable locations in the text.</li>
            <li>The word count of the whole manuscript should be within 5000-8000 words, and the submitted manuscript should be in a double-column format. Please follow our specific journal template for additional guidelines.</li>
            <li>After acceptance, your research paper will be assigned a distinct DOI number for publication in our journal.</li>
            <li>For reference, APA 7th standard formatting style is recommended.</li>
            <li>For author guidelines and template, please see the <strong class="text-primary">Journal_Template_jitmbh.docx</strong> file.</li>
        </ul>
    </section>

    <!-- Highlights Section -->
    <section class="mb-5" id="highlights">
        <h4 class="h4 text-primary">Highlights</h4>
        <p>Highlights are not mandatory but strongly recommended for this journal, as they enhance the visibility of your work through search engines. The abstract comprises a concise set of bullet points that summarise the innovative findings of your research, along with any original methodologies employed during the study (if applicable). Submit the highlights in a distinct editable file within the online submission system. Please ensure that the file name includes the term 'Highlights' and consists of 4 to 5 bullet points. Each bullet point should not exceed 90 characters, including spaces.</p>
    </section>

    <!-- Article Processing Charge (APC) Section -->
    <section class="mb-5" id="apc">
        <h4 class="h4 text-primary">Article Processing Charge (APC)</h4>
        <p>Authors must pay an Article Processing Charge (APC) in order to have their paper published as Open Access. This encompasses the costs related to every stage of the publication process, which span from overseeing the peer-review process to editing the manuscript and hosting the final formatted article on dedicated servers.</p>
        <p>For publishing a research article in the Journal of Information Technology Management and Business Horizons, authors need to pay <strong>$500</strong> as APC.</p>
    </section>

    <!-- Publishing Timeline Section -->
    <section class="mb-5" id="publishing-timeline">
        <h4 class="h4 text-primary">Publishing Timeline</h4>
        <p><strong>Review time:</strong> Minimum 15 - 21 days</p>
        <p><strong>Submission to acceptance:</strong> TBA</p>
        <p>Submission to acceptance: 30 - 45 days</p>
    </section>
    
     <section id="units-nomenclature" class="mb-4">
      <h4 class="text-primary">Units, Nomenclature, and Mathematical Expressions</h4>
      <p>It is preferable for units of measurement and acronyms to adhere to the International System of Units (SI), unless another unit system is more appropriate. The numerical designations for the presented mathematical expression should be included in brackets and referenced in the text as illustrated by the following examples (e.g., Eq. (1), Eqs. (1)-(2)). In order to include mathematical expressions in Microsoft Word 2007 and later versions, they must be entered as an object using Microsoft Equations 3.0.</p>
    </section>

    <section id="reference-style" class="mb-4">
      <h4 class="text-primary">Reference Style</h4>
      <p>A bibliography containing up-to-date references on the present state of technology in the field is located after the conclusions of the study. To obtain specific instructions on how to compile a list of references and properly cite them within the text, authors are recommended to consult the introduction and refer to the provided sample list in the Authors' Guidelines Template.</p>
    </section>

    <section id="acknowledgements" class="mb-4">
      <h4 class="text-primary">Acknowledgements</h4>
      <p>Arrange acknowledgements in a distinct section at the conclusion of the piece, preceding the references. Avoid including them on the title page, as a footnote to the title, or in any other location. Enumerate the persons who contributed to the research by providing assistance in areas such as language support, writing aid, or proofreading the publication.</p>
    </section>

    <section id="language-editing-services" class="mb-4">
      <h4 class="text-primary">Language Editing Services</h4>
      <p>Please write your material using proper English, adhering to either American or British conventions, but not a combination of the two. For authors seeking information about language editing and copyediting services before and after submitting their work, please visit <a href="https://c5k.com/language-editing/" target="_blank">Language Editing Services</a>.</p>
    </section>

    <section id="review-process">
      <h4 class="text-primary">Review Process</h4>
      <p>This journal has a single-blind review process. Only the papers that have successfully passed the initial evaluation by the editors will be subjected to a thorough peer-review procedure to assess their importance and novelty. After being considered appropriate, papers are usually sent to at least two independent professional reviewers to evaluate the scientific merit of the publication. The editor will make the final decision on whether to accept or reject the articles based on the favourable recommendations from at least two expert reviewers. The decision of the Editor is conclusive.</p>
    </section>
 <section id="open-access" class="mb-4">
      <h4 class="text-primary">Open Access</h4>
      <p>This journal is freely accessible to the public. Every article will be instantly and permanently accessible to all individuals for reading and downloading without any cost. In order to ensure unrestricted access, this journal requires authors to pay an Article Processing Charge (APC) for Open Access publishing. This charge can be paid by the authors themselves or by their research funder or institution and the details can be found about APC in the website.</p>
    </section>

    <section id="after-acceptance" class="mb-4">
      <h4 class="text-primary">After Acceptance</h4>
      <p>The Digital Object Identifier (DOI) can be utilised for the purpose of referencing and connecting to electronic documents. The DOI is a distinct alphanumeric character string that is assigned to a document by the publisher when it is first published electronically. The designated DOI remains constant. Hence, it is a perfect platform for referencing a document, namely 'Articles in Production', as they have not yet been provided with their complete bibliographic details.</p>
    </section>

    <section id="conflict-of-interest" class="mb-4">
      <h4 class="text-primary">Conflict of Interest</h4>
      <p>Authors must disclose any existing or potential conflict of interest, such as financial, personal, or professional relationships with individuals or organisations, that could inappropriately or potentially influence their work. This disclosure should cover a period of three years from the start of the submitted work.</p>
    </section>

    <section id="submission-declaration" class="mb-4">
      <h4 class="text-primary">Submission Declaration and Verification</h4>
      <p>The submission of an article indicates that the described work has not been previously published, except in the form of an abstract, a published lecture, or an academic thesis. It also confirms that the work is not being considered for publication elsewhere and that all authors have approved its publication. Furthermore, the responsible authorities at the institution where the work was conducted have given their approval, either explicitly or implicitly. If the article is accepted, it will not be published in the same form, whether in English or any other language, including electronically, without the written consent of the copyright-holder.</p>
    </section>

    <section id="changes-to-authorship" class="mb-4">
      <h4 class="text-primary">Changes to Authorship</h4>
      <p>This policy pertains to the inclusion, removal, or reordering of author names in the authorship of accepted submissions. Prior to the publication of the accepted paper in an online issue: Requests for author modifications, such as adding or removing an author or rearranging author names, should be submitted to the Journal Manager by the corresponding author of the accepted manuscript. The request must include: (a) a justification for the proposed change and (b) written confirmation (via email, fax, or letter) from all authors expressing their agreement with the addition, removal, or rearrangement. Once the accepted manuscript is published in an online issue, any requests to modify the author names, such as adding, deleting, or rearranging them, will be subject to the same regulations mentioned before and will require a corrigendum to be issued.</p>
    </section>

    <div id="proofs" class="mb-4">
      <h4 class="text-primary">Proofs</h4>
      <p>The corresponding author will receive proof to fix any typesetting problems. Modifications to the initial manuscript will not be acknowledged at this point. In order to expedite the publication process of the article, it is necessary to return the proofs within 24-72 hours of receiving them. This proof should be used solely for the purpose of verifying the typesetting, editing, completeness, and accuracy of the text, tables, and figures. At this time, any substantial modifications to the piece, as it was approved for publication, will only be entertained with the Editor's permission. We will make every effort to expedite the publication of your content with utmost precision. Proofreading is entirely your responsibility.</p>
    </section>

    <section id="copyright-funding" class="mb-4">
      <h4 class="text-primary" class="text-primary">Copyright and Funding</h4>
      <p>When submitting an article to a C5K Academic Publishing Journal, it is expected that the article is original, has not been published before, and is not being considered for publication elsewhere. This journal undergoes a rigorous evaluation process by experts in the field and is freely accessible to all readers. The C5K Academic Publishing Hub is the proprietor and holds the copyright for the entire assembled periodical and its issues. Authors will maintain copyright for the individual article, in addition to scholarly usage rights. C5K Academic Publishing Hub will be given non-exclusive rights to publish and distribute the article.</p>
      <p>The Agreement of Authorship, Originality, and Copyright <strong class="text-primary">Transfer_ jitmbh.docx</strong> must be signed and filed. Please provide information regarding the source of financial support for the research and/or article preparation. Additionally, briefly describe the role of any sponsors in the study design, data collection, analysis and interpretation, report writing, and decision to submit the article for publication. If the financing source(s) did not have any role, it is advisable to explicitly mention this.</p>
    </section>

    <section id="post-publication-amendments" class="mb-4">
      <h4 class="text-primary">Post-publication Amendments</h4>
      <p>If a substantial error is identified after the article has been published, we will provide a correction according to new observations. If an error is introduced by us, an Erratum will be published after amendments. If the error is introduced by the author, a corrigendum will be published with new volume and issue in the upcoming journal issue.</p>
    </section>

    <section id="errata-corrigenda" class="mb-4">
      <h4 class="text-primary">Errata and Corrigenda</h4>
      <p>If a substantial error is identified after the article has been published, we will provide a correction according to new observations. If an error is introduced by us, an Erratum will be published after amendments. If the error is introduced by the author, a corrigendum will be published with new volume and issue in the upcoming journal issue.</p>
    </section>

    <section id="retractions" class="mb-4">
      <h4 class="text-primary">Retractions</h4>
      <p>Articles can be withdrawn, retracted, removed, or substituted post-publication in the event of significant errors that cannot be rectified by the publication of an Erratum or a Corrigendum, or if ethical violations are discovered after publication.h</p>
    </section>



`
        <!-- Other sections here... -->
      </div>
    </div>
  </div>
    <!-- Footer Section -->
    <div class="footer-wrapper">
      @include('layout.footer_nav')
      @include('layout.footer')
    </div>
  </div>


  @include('layout.js')
</body>
</html>
