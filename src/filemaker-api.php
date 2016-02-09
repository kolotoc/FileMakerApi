<?php

spl_autoload_register(function ($className) {
    static $classMap = array(
        'Kolotoc\\FileMakerApi\\FileMaker' => 'FileMaker.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command' => 'Command.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Error' => 'Error.php',
        'Kolotoc\\FileMakerApi\\PEAR' => 'PEAR.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Field' => 'Field.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Layout' => 'Layout.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Record' => 'Record.php',
        'Kolotoc\\FileMakerApi\\FileMaker_RelatedSet' => 'RelatedSet.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Result' => 'Result.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Add' => 'Command/Add.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_CompoundFind' => 'Command/CompoundFind.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Delete' => 'Command/Delete.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Duplicate' => 'Command/Duplicate.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Edit' => 'Command/Edit.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Find' => 'Command/Find.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindAll' => 'Command/FindAll.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindAny' => 'Command/FindAny.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindRequest' => 'Command/FindRequest.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_PerformScript' => 'Command/PerformScript.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Implementation' => 'Implementation/FileMakerImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Implementation' => 'Implementation/CommandImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Field_Implementation' => 'Implementation/FieldImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Layout_Implementation' => 'Implementation/LayoutImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Record_Implementation' => 'Implementation/RecordImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_RelatedSet_Implementation' => 'Implementation/RelatedImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Result_Implementation' => 'Implementation/ResultImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Add_Implementation' => 'Implementation/Command/AddImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_CompoundFind_Implementation' => 'Implementation/Command/CompoundFindImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Delete_Implementation' => 'Implementation/Command/DeleteImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Duplicate_Implementation' => 'Implementation/Command/DuplicateImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Edit_Implementation' => 'Implementation/Command/EditImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindAll_Implementation' => 'Implementation/Command/FindAllImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindAny_Implementation' => 'Implementation/Command/FindAnyImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_Find_Implementation' => 'Implementation/Command/FindImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_FindRequest_Implementation' => 'Implementation/Command/FindRequestImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Command_PerformScript_Implementation' => 'Implementation/Command/PerformImpl.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Parser_FMPXMLLAYOUT' => 'Implementation/Parser/FMPXMLLAYOUT.php',
        'Kolotoc\\FileMakerApi\\FileMaker_Parser_FMResultSet' => 'Implementation/Parser/FMResultSet.php',
    );

    if (isset($classMap[$className])) {
        require __DIR__ . '/FileMaker/' . $classMap[$className];
    }
});
