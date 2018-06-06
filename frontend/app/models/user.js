import DS from 'ember-data';

export default DS.Model.extend({
  name: DS.attr('string'),
  favoriteColor: DS.attr('string'),
  favoriteColorCode: DS.attr('string'),
  connections : DS.hasMany('connection', {async:true}),
});
