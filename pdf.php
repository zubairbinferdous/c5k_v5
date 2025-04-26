<?php
if (isset($_GET['file'])) {
	$file = $_GET['file'];
}
else{
	$file = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Full-Screen PDF Viewer</title>
	<script type="text/javascript">
		const template = document.createElement('template');
		template.innerHTML = `
			<iframe frameborder="0" 
				style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;">
			</iframe>
		`;

		class PdfViewer extends HTMLElement {
			constructor() {
				super();
				const shadowRoot = this.attachShadow({ mode: 'open' });
				shadowRoot.appendChild(template.content.cloneNode(true));
			}
			static get observedAttributes() {
				return ['src'];
			}
			connectedCallback() {
				this.updateIframeSrc();
			}
			attributeChangedCallback(name) {
				if (name === 'src') {
					this.updateIframeSrc();
				}
			}
			updateIframeSrc() {
				this.shadowRoot.querySelector('iframe').setAttribute(
					'src', 
					`https://mozilla.github.io/pdf.js/web/viewer.html?file=${this.getAttribute('src') || ''}`
				);
			}
		}
		window.customElements.define('pdf-viewer', PdfViewer);
	</script>
</head>
<body>
	<pdf-viewer src="<?php echo 'https://corsproxy.io/?url='.$file; ?>"></pdf-viewer>
</body>
</html>