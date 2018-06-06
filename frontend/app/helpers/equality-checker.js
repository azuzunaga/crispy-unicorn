import { helper } from '@ember/component/helper';

export function equalityChecker(arg1, arg2) {
  return arg1 === arg2;
}

export default helper(equalityChecker);
