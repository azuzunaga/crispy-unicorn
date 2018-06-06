import DS from 'ember-data';

export default DS.Model.extend({
  big: DS.belongsTo('user', { inverse: null }),
  small: DS.belongsTo('user', { inverse: null }),
});
