
extern zend_class_entry *phalcon_validation_validator_identical_ce;

ZEPHIR_INIT_CLASS(Phalcon_Validation_Validator_Identical);

PHP_METHOD(Phalcon_Validation_Validator_Identical, validate);

ZEND_BEGIN_ARG_INFO_EX(arginfo_phalcon_validation_validator_identical_validate, 0, 0, 2)
	ZEND_ARG_INFO(0, validation)
	ZEND_ARG_INFO(0, field)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_validation_validator_identical_method_entry) {
	PHP_ME(Phalcon_Validation_Validator_Identical, validate, arginfo_phalcon_validation_validator_identical_validate, ZEND_ACC_PUBLIC)
  PHP_FE_END
};