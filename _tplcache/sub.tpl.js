(function(root) { 
/* Contemplate cached template 'sub' */ 
function Contemplate_sub_Cached($id) { this.id=$id; this.data=null; var $parent=null, $blocks=null; this.setId=function($id) { if ($id) {this.id=$id;} return this; }; this.setParent=function(parent) { $parent=parent; return this; }; this.renderBlock=function(block) { $blocks={ };  if ($blocks[block]) return $blocks[block].call(this); else if ($parent) return $parent.renderBlock.call(this, block); return ''; }; this.render=function(data) { var $__p__ = ''; if ($parent) {$__p__ = $parent.render.call(this, data);} else {this.data = Contemplate.clonePHP(data); with(this.data) { $__p__ += '<div>' + "\n" + ''; if ($usergroup && Object.keys($usergroup).length) { for (var $j in $usergroup) { if (Contemplate.hasOwn($usergroup, $j)) { var $user=$usergroup[$j]; this.data['$j']=$j; this.data['$user']=$user;   $__p__ += '' + "\n" + '<div id=\'' + ( $user["id"] ) + '\' class="'; if (0 == ($j % 2)) {   $__p__ += 'even'; } else if (1 == ($j % 2)) {   $__p__ += 'odd'; }   $__p__ += '">' + "\n" + '    <a href="/' + ( $user["name"] ) + '">' + ( $user["name"] ) + '' + ( $user["text"] ) + ' ' + ( Contemplate.n($i) + Contemplate.n($j) ) + '</a>: <strong>' + ( $user["text"] ) + '</strong>' + "\n" + '</div>' + "\n" + ''; } } } else {   $__p__ += '' + "\n" + '<div class="none">No Users</div>' + "\n" + ''; }   $__p__ += '' + "\n" + '<hr /><strong>Number of Items:' + ( Contemplate.count($usergroup) ) + '</strong><hr />' + "\n" + '</div>' + "\n" + ''; }} this.data=null; return $__p__; }; }; if ('undefined' != typeof (module) && module.exports) {module.exports=Contemplate_sub_Cached;} else if (typeof (exports) != 'undefined') {exports=Contemplate_sub_Cached;}  else {root.Contemplate_sub_Cached=Contemplate_sub_Cached;} })(this);