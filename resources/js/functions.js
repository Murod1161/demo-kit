export function enableFeedbackInputValidation(input)
{
    input.classList.add('input--validatable');
    input.removeEventListener('input', enableFeedbackInputValidation);
}
