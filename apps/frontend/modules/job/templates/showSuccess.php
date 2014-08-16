<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1803    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.1803    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1803    6538776  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1803    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.1803    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1812    6538984  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1824    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.1824    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1824    6538776  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1824    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.1824    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2024    6538984  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2029    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2029    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2029    6538776  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2029    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2029    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2076    6538984  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2087    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2087    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2088    6538776  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2087    6537708  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2087    6537968  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2384    6555368  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2393    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2393    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2393    6555160  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2393    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2393    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2400    6555368  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2409    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2409    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2409    6555160  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2409    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2409    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2417    6555368  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2427    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2427    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2427    6555160  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2427    6554092  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2427    6554352  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2698    6571752  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2708    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2708    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2708    6571544  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2708    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2708    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2717    6571752  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2727    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2727    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2727    6571544  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2727    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2727    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2731    6571752  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2736    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2736    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2736    6571544  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2736    6570476  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.2736    6570736  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3006    6588136  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3016    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3017    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3017    6587928  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3016    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3017    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3025    6588136  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3037    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3037    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3037    6587928  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3037    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3037    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3046    6588136  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3322    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3322    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3322    6587928  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3322    6586860  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3322    6587120  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3331    6604520  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3341    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3341    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3341    6604312  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3341    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3341    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3350    6604520  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3361    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3361    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3362    6604312  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3361    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3361    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3371    6604520  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3629    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3629    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3629    6604312  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3629    6603244  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3629    6603504  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3638    6620904  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $jobeet_job->get
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3649    6619628  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3649    6619888  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3649    6620696  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3649    6619628  13. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:6
    0.3649    6619888  14. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3658    6620904  15. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3668    6617272  13. sfModelGenerator->getPrimaryKeyUrlParams() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:19
    0.3669    6617504  14. sfDoctrineGenerator->getColumnGetter() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.3669    6617504  15. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.3669    6617764  16. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3669    6618572  17. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0002     123020   1. {main}() /home/paulo/pp3/sfprojects/jobeet/symfony:0
    0.0019     265168   2. include('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/paulo/pp3/sfprojects/jobeet/symfony:14
    0.0739    3299752   3. sfSymfonyCommandApplication->run() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0763    3304356   4. sfTask->runFromCLI() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0764    3305376   5. sfBaseTask->doRun() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0840    3620300   6. sfDoctrineGenerateModuleTask->execute() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0889    4038180   7. sfDoctrineGenerateModuleTask->executeGenerate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0892    4048952   8. sfGeneratorManager->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0905    4160936   9. sfModelGenerator->generate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1068    5421380  10. sfGenerator->generatePhpFiles() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.1791    6512548  11. sfGenerator->evalTemplate() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1796    6535232  12. require('/home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php') /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.3668    6617272  13. sfModelGenerator->getPrimaryKeyUrlParams() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/showSuccess.php:19
    0.3669    6617504  14. sfDoctrineGenerator->getColumnGetter() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.3669    6617504  15. sfInflector::camelize() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.3669    6617764  16. sfToolkit::pregtr() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.3679    6618780  17. preg_replace_callback() /home/paulo/pp3/sfprojects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

id='.$jobeet_job->get()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
