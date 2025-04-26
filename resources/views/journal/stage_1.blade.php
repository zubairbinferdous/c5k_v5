// In FormController.php for each step
public function storeStep1(Request $request)
{
    $request->validate([
        'field1' => 'required',
        'field2' => 'required',
    ]);

    // Retrieve or create a submission record based on session_id or unique identifier
    $form = FormSubmission::updateOrCreate(
        ['session_id' => session()->getId()],
        [
            'field1' => $request->field1,
            'field2' => $request->field2,
        ]
    );

    return redirect()->route('form.step2');
}

public function storeStep2(Request $request)
{
    $request->validate([
        'field3' => 'required',
        'field4' => 'required',
    ]);

    // Update the same row by identifying with session_id or unique identifier
    $form = FormSubmission::updateOrCreate(
        ['session_id' => session()->getId()],
        [
            'field3' => $request->field3,
            'field4' => $request->field4,
        ]
    );

    return redirect()->route('form.step3');
}
