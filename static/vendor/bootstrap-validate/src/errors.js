import { CLASS_ERROR, CLASS_HELP_BLOCK, ELEMENT_HELP_BLOCK } from "./constants";

module.exports = (input, rule, isValid, text) => {
  const specificErrorClass = `has-error-${rule}`;
  const formGroup = input.closest(".form-group") || input.parentNode;
  let specificHelpBlock = formGroup.querySelector(`.${specificErrorClass}`);

  if (isValid) {
    // Element is valid, continue
    if (specificHelpBlock) {
      // Element already has an error element which we can safely remove.
      input.classList.remove(CLASS_ERROR);
      input.parentNode.classList.remove("mb-3");
      specificHelpBlock.style.display = "none";
    }
  } else {
    // Not Valid!
    if (specificHelpBlock) {
      // Element also has an error element.
      specificHelpBlock.innerHTML = text;
      specificHelpBlock.style.display = "inline";
      input.parentNode.classList.add("mb-3");
    } else {
      specificHelpBlock = document.createElement(ELEMENT_HELP_BLOCK);
      input.parentNode.appendChild(specificHelpBlock);
      let salto = document.createElement("div");
      input.parentNode.appendChild(salto);
      input.parentNode.classList.add("mb-3");
      salto.classList.add("w-100");
      specificHelpBlock.style.display = "inline";
      specificHelpBlock.classList.add(CLASS_HELP_BLOCK, specificErrorClass);
      specificHelpBlock.innerHTML = text;
    }
    // The parent Element needs to contain the error class.
    if (!input.classList.contains(CLASS_ERROR)) {
      // So we'll just add the class if it is absent.
      input.classList.add(CLASS_ERROR);
    }
  }
};

export default module.exports;
