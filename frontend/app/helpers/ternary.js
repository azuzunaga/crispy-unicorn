import { helper } from '@ember/component/helper';

export function ternary(test, yes, no) {
  return test ? yes : no;
}

export default helper(ternary);
